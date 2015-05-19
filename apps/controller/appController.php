<?php

class appController extends baseController {

	public function index() 
	{
		/*** set a template variable ***/
		/* OVERRIDE ASSETS
 		* ------------------------------ */
 		$this->_var['TITLE'] = 'Application | ' . $this->_title;

		$this->registry->template->vars['var'] = $this->_var;
		if(! $this->xmlHttpRequest){
			$this->registry->template->show('main' . $this->extension);
		}
		else{
			$this->process();
		}
	}

	public function dashboard($args = array()){
		$this->_args = $args;
		$this->index();
	}
}