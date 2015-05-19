<?php

class indexController extends baseController {

	public function index() 
	{
		/*** set a template variable ***/
		$this->getBestProduct();
		$this->_var['TITLE'] = 'Home | ' . $this->_title;
		$this->registry->template->vars['var'] = $this->_var;

		if(! $this->xmlHttpRequest){
			$this->registry->template->show('index' . $this->extension);
		}
		else {
			$this->process();
		}
	}

	public function getBestProduct()
	{
		require_once(MODEL_PATH . 'product/M_Product.php');
		Product::$conditionQry = " ORDER BY best_seller DESC LIMIT 15 ";
		$prod = ProductFacade::findProduct("FIND_WITH_MCAT");
		
		$product = array();
		$product['dbProduct'] = array();
		$product['dbHasBest'] = 0;
		if(count($prod)){
			foreach($prod as $prod){
				array_push($product['dbProduct'], $prod);
			}
			$product['dbHasBest'] = 1;
		}
		$this->loadRequirement($product);		
	}
};