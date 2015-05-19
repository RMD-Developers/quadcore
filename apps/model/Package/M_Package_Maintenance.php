<?php

/* 
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class M_Package_Maintenance extends Model{
	
	public function loadPackage(){
		try{	
			$this->arrRes['result'] = "";
			$q = isset($_GET['str'])?Init::clean($_GET['str']):"";
			$sort = isset($_GET['sort'])?$_GET['sort']:"ASC";
			Package::$conditionQry = " WHERE package_desc LIKE '%$q%' ORDER BY package_id " . $sort;
			$package = PackageFacade::findPackage("FIND_ALL");
			
			if(count($package)){
			
				foreach($package as $k=>$package):
					$this->arrRes['result'] .= "
						<tr>
						  <td style='width:4%'><center><input type='checkbox' id='$package->package_id' value=''><label for='$package->package_id'><span></span></label></center></td>
						  <td style='width:18%'><a href='Javascript:void(0)' class='btn btn-danger btn-xs'>Delete</a>&nbsp;&nbsp;&nbsp;
							<a href='".SERVER_PATH."package/$package->package_id?edit' class='btn btn-warning btn-xs'>Edit</a>&nbsp;&nbsp;&nbsp;
							<a href='".SERVER_PATH."package/$package->package_id' class='btn btn-primary btn-xs'>Details</a></td>
						  <td style='width:3%'>".($k+1)."</td>
						  <td>".(($package->package_cat == "home")? "Home": "Small Business"). "</td>
						  <td>$package->package_desc</td>
						  <td>Php $package->package_price</td>
						  <td>".date_format(new DateTime($package->date_added), "F d, Y")."</td>
						</tr>
					";
				endforeach;
			} else {
				$this->arrRes['result'] .= "
					<tr><td colspan=7 style='text-align:center'>No package available.</td></tr>; ";
			}
			Package::$conditionQry = null;
			echo json_encode($this->arrRes);
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }	
	}
	
	public function deletePackage(){
		$ids = $_GET['id'];
		foreach($ids as $id):
		try{	
			Package::$conditionQry = " package_id = :package_id LIMIT 1";
			$param =  array(":package_id"=>$id);
			$package = PackageFacade::modifyPackage($param, "DELETE");
			
			$imgPath = 'plugin/imgs/profile/package/';
			if(file_exists($imgPath . $id . ".jpg"))unlink($imgPath . $id . ".jpg");
			
			if(count($package)){
				$this->strRes = "success";
			}
		} catch (PDOException $ex) {
            Log::dbLog($ex);
        }
		endforeach;
		
		Package::$conditionQry = null;
		echo $this->strRes;
	}
					
}

