<?php

class productController extends baseController {

	public function index() {
		/*** set a template variable ***/
		if($this->isProduct()){ $this->loadRequirement(array("hasActiveProduct"=>true, "activeProductID"=>$this->getActiveId())); }
		if($this->isProduct() && isset($_GET['edit'])){ 
			$this->file = "product/new"; 
			require_once(MODEL_PATH . 'product/M_Product.php');
			$prod = new M_Product();
			$_REQUEST['id'] = $this->getActiveId();
			$this->loadRequirement(array("dbProduct"=>$prod->getProductDetails()));
		}
		
		if(! $this->xmlHttpRequest)$this->registry->template->show($this->file . $this->extension);
		else{
			$this->process();
		}
	}
	
	public function isProduct(){
		$parts = isset($_GET['path'])?explode("/", $_GET['path']):null;
		$len = count($parts) - 1;
		$key = $parts[$len];
		try{ Product::$conditionQry = " WHERE prod_id=:prod_id limit 1";
			 $prod = ProductFacade::findProduct("FIND_ALL", array(":prod_id"=>$key));
			 Product::$conditionQry = null;
			 return count($prod);
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