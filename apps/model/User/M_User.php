<?php

/* 
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class M_User extends Model{
    
	/*
	 *@return login confirmation
	 */
    public function login(){
		try{
			$user = init::clean($_GET['username']);
			$pass = init::clean($_GET['password']);
			
			User::$conditionQry = " WHERE (username = :username OR email = :email) AND password = SHA1(:password) LIMIT 1";
			$person = UserFacade::findUser("FIND_ALL", array(":username"=>$user, ":email"=>$user, ":password"=>$pass));
			$totRecord = count($person);
			
			if($totRecord){
				$row = $person->fetch(PDO::FETCH_OBJ);
				$_SESSION['userID'] = $row->user_id;
			}
			
			User::$conditionQry = null;
			echo $totRecord;
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }
    }
	
	public function logout(){
		if(session_destroy()){
			session_unset();
		}
	}
	
	public function addUser(){
		$fname = init::clean($_GET['fname']);
		$lname = init::clean($_GET['lname']);
		$user = init::clean($_GET['user']);
		$pass = init::clean($_GET['pass']);
		$oldPass = init::clean(isset($_GET['oldPass'])?$_GET['oldPass']:"");
		$email = init::clean($_GET['email']);
		$isEdit = $_GET['isEdit'];
		$user_id = $_GET['userid'];
		
		$this->arrRes['res'] = true;
		
		if(! $isEdit){
			$this->arrRes['mes'] = "Successfully added $fname $lname. <a href='JavaScript:$.loginConfirm();$.popMinihide()'>Login</a>";
		
			if($this->isUserExist("username = :username", array(":username"=>$user))){ 
				$this->arrRes['mes'] = "Username already existed. <a href='JavaScript:$.loginConfirm();$.popMinihide()'>Login</a>";
				$this->arrRes['res'] = false;
			}
			 
			if($this->isUserExist("email = :email", array(":email"=>$email))){ 
				$this->arrRes['mes'] = "Email address already existed. <a href='JavaScript:$.loginConfirm();$.popMinihide()'>Login</a>";
				$this->arrRes['res'] = false;
			}
			
			if($this->arrRes['res']){
				// first is the param
				User::$conditionQry = " (fname, lname, email, password, username, userlevel, date_added) 
						values (:fname, :lname, :email, SHA1(:pass), :user, 1, now())";
				$sql_insertUser = UserFacade::modifyUser(array(":fname"=>$fname, 
								":lname"=>$lname, ":email"=>$email, ":pass"=>$pass, ":user"=>$user));
				User::$conditionQry = null;
				if(! count($sql_insertUser)){ $this->arrRes['mes'] = "Something went wrong. Please try again."; }
			}
		}
		else {
			$this->arrRes['mes'] = "Successfully saved record.";
		
			$_REQUEST['id'] = $_GET['userid'];
			$dbUser = $this->getUserDetails();
			
			$_REQUEST['id'] = $_SESSION['userID'];
			$dbLoggedUser = $this->getUserDetails();
			
			if($user != $dbUser->username){
				if($this->isUserExist("username = :username", array(":username"=>$user))){ 
					$this->arrRes['mes'] = "Username already existed. Please choose another username.";
					$this->arrRes['res'] = false;
				}
			}
			
			if($email != $dbUser->email){
				if($this->isUserExist("email = :email", array(":email"=>$email))){ 
					$this->arrRes['mes'] = "Email Address already existed.";
					$this->arrRes['res'] = false;
				}
			}
			
			if(SHA1($oldPass) != $dbUser->password && $dbLoggedUser->userlevel != 0){
				$this->arrRes['mes'] = "Your <u>confirmation password</u> do not match to your <i>current password</i>.";
				$this->arrRes['res'] = false;
			}
			
			
			if($this->arrRes['res']){
				// first is the param
				if(($pass == "" || empty($pass)) && $dbLoggedUser->userlevel != 0){
					User::$conditionQry = " fname = :fname, lname = :lname, email = :email, username = :user WHERE user_id=:userid ";
					$sql_insertUser = UserFacade::modifyUser(array(":fname"=>$fname, 
									":lname"=>$lname, ":email"=>$email, ":user"=>$user, ":userid"=>$user_id), "UPDATE");
				} else if(($pass != "" || !empty($pass)) && $dbLoggedUser->userlevel != 0){ //***
					User::$conditionQry = " fname = :fname, lname = :lname, email = :email, password = SHA1(:pass), username = :user WHERE user_id=:userid ";
					$sql_insertUser = UserFacade::modifyUser(array(":fname"=>$fname, 
									":lname"=>$lname, ":email"=>$email, ":pass"=>$pass, ":user"=>$user, ":userid"=>$user_id), "UPDATE");
									
				} else if(($pass == "" || empty($pass)) && $dbLoggedUser->userlevel == 0){
					User::$conditionQry = " fname = :fname, lname = :lname, email = :email, username = :user WHERE user_id=:userid ";
					$sql_insertUser = UserFacade::modifyUser(array(":fname"=>$fname, 
									":lname"=>$lname, ":email"=>$email, ":user"=>$user, ":userid"=>$user_id), "UPDATE");
				} else if(($pass != "" || !empty($pass)) && $dbLoggedUser->userlevel == 0){ //***
					User::$conditionQry = " fname = :fname, lname = :lname, email = :email, password = SHA1(:pass), username = :user WHERE user_id=:userid ";
					$sql_insertUser = UserFacade::modifyUser(array(":fname"=>$fname, 
									":lname"=>$lname, ":email"=>$email, ":pass"=>$pass, ":user"=>$user, ":userid"=>$user_id), "UPDATE");
				}
				
				User::$conditionQry = null;
			}
			
		}		
		
		echo json_encode($this->arrRes);
	}
	
	public function isUserExist($sqlCase = null, $sqlParam = array()){
		User::$conditionQry = " WHERE ". $sqlCase ." LIMIT 1";
		$sql = UserFacade::findUser("FIND_ALL", $sqlParam);
		User::$conditionQry = null;
		if(count($sql)){ 
			return true;
		}
		return false;
	}
	
	public function getUserDetails(){
		try{
			User::$conditionQry = " WHERE user_id = :user_id LIMIT 1";
			$param =  array(":user_id"=>$_REQUEST['id']);
			$user = UserFacade::findUser("FIND_ALL", $param);
			foreach($user as $user):
				$user = $user;
			endforeach;
			
			User::$conditionQry = null;
			
			return $user;
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }
	}
	
}

