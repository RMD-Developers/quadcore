<?php

class packageController extends baseController {

	public function index() {
		/*** set a template variable ***/
		if($this->isPackage()){
		
			if(isset($_GET['edit']))
				$this->file = "package/new";
			else $this->file = "package/index";	
			require_once(MODEL_PATH . 'Package/M_Package.php');
			$package = new M_Package();
			$_REQUEST['id'] = $this->getActiveId();
			$this->loadRequirement(array("dbPackage"=>$package->getPackageDetails(), "hasActivePackage"=>true, "activePackageID"=>$this->getActiveId()));
		}
		
		
		if(! $this->xmlHttpRequest)$this->registry->template->show($this->file . $this->extension);
		else{
			$this->process();
		}
	}
	
	public function isPackage(){
		$parts = isset($_GET['path'])?explode("/", $_GET['path']):null;
		$len = count($parts) - 1;
		$key = $parts[$len];
		try{ Package::$conditionQry = " WHERE package_id=:package_id limit 1";
			 $package = PackageFacade::findPackage("FIND_ALL", array(":package_id"=>$key));
			 Package::$conditionQry = null;
			 return count($package);
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