<?php

class userController extends baseController {

	public function index() {
		/*** set a template variable ***/
		if(isset($_SESSION['userID'])){
			require_once(MODEL_PATH . 'User/M_User.php');
			
			$_REQUEST['id'] = $_SESSION['userID'];
			$user = new M_User();
			$userLoggedRecord = $user->getUserDetails();
			
			if($this->isUser() && isset($_GET['edit'])){
				$activeUserId = $this->getActiveId();
				$this->file = "user/new";
				
				if($activeUserId != $userLoggedRecord->user_id){
					if($userLoggedRecord->userlevel){ $this->file = "user/err"; }
				}
				
				$_REQUEST['id'] = $this->getActiveId();
				$this->reqArray["dbUser"] = $user->getUserDetails();
				$this->reqArray["hasActiveUser"] = true;
				$this->reqArray["activeuserID"] = $activeUserId;
			}
		}
		
		$this->loadRequirement($this->reqArray);
		
		if(! $this->xmlHttpRequest){
			$this->registry->template->show($this->file . $this->extension);
		}
		else{
			$this->process();
		}
	}
	
	public function logout(){
		require_once(MODEL_PATH . 'user/M_User.php');
		$user = new M_User();
		$user->logout();
		header('location:' . SERVER_PATH);
		exit();
	}
	
	public function isUser(){
		$parts = isset($_GET['path'])?explode("/", $_GET['path']):null;
		$len = count($parts) - 1;
		$key = $parts[$len];
		try{ User::$conditionQry = " WHERE user_id=:user_id limit 1";
			 $user = UserFacade::findUser("FIND_ALL", array(":user_id"=>$key));
			 User::$conditionQry = null;
			 return count($user);
		} catch (PDOException $ex) {
			Log::dbLog($ex);
		}
	}
	
	public function getActiveId(){
		$parts = isset($_GET['path'])?explode("/", $_GET['path']):null;
		$len = count($parts) - 1;
		$key = $parts[$len];
		return $key;
	}
}

//ems/show_me.htm