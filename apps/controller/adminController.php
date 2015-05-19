<?php

class adminController extends baseController {

	public function index() 
	{
		/*** set a template variable ***/
		if(! $this->xmlHttpRequest){
			$this->registry->template->show($this->file . $this->extension);
		}
		else{
			$this->process();
		}
	}

	public function sample_data($args = null)
	{

	}
	
}

//ems/show_me.htm