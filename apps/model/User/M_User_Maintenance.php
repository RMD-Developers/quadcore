<?php

/* 
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class M_User_Maintenance extends Model{
	
	public function loadUser(){
		try{	
			$this->arrRes['result'] = "";
			$q = isset($_GET['str'])?Init::clean($_GET['str']):"";
			$sort = isset($_GET['sort'])?$_GET['sort']:"ASC";
			User::$conditionQry = " WHERE concat(fname, ' ', lname) LIKE '%$q%' AND userlevel != 0 ORDER BY user_id " . $sort;
			$user = UserFacade::findUser("FIND_ALL");
			
			if(count($user)){
			
				foreach($user as $k=>$user):
					$this->arrRes['result'] .= "
						<tr>
						  <td style='width:4%'><center><input type='checkbox' id='$user->user_id' value=''><label for='$user->user_id'><span></span></label></center></td>
						  <td style='width:18%'><a href='Javascript:void(0)' class='btn btn-danger btn-xs'>Delete</a>&nbsp;&nbsp;&nbsp;
							<a href='".SERVER_PATH."user/$user->user_id?edit' class='btn btn-warning btn-xs'>Edit</a></td>
						  <td style='width:3%'>".($k+1)."</td>
						  <td>$user->fname $user->lname</td>
						  <td>$user->email</td>
						  <td>$user->username</td>
						  <td>".date_format(new DateTime($user->date_added), "F d, Y")."</td>
						</tr>
					";
				endforeach;
			} else {
				$this->arrRes['result'] .= "
					<tr><td colspan=7 style='text-align:center'>No user available.</td></tr>; ";
			}
			
			User::$conditionQry = null;
			echo json_encode($this->arrRes);
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }	
	}
	
	public function deleteUser(){
		$ids = $_GET['id'];
		foreach($ids as $id):
		try{	
			User::$conditionQry = " WHERE user_id = :user_id LIMIT 1";
			$param =  array(":user_id"=>$id);
			$user = UserFacade::modifyUser($param, "DELETE");
			if(count($user)){
				$this->strRes = "success";
			}
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }
		endforeach;
		
		User::$conditionQry = null;
		echo $this->strRes;
	}
					
}

