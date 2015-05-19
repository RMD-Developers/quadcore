<?php

class Assets {
	
	protected $_css = array();
	protected $_js = array();

	public function setCSS($css = array(), $act = 'append')
	{
		 if($act == 'append')
		 	foreach($css as $c) array_push($this->_css, $c);
		 else 
		 	$this->_css = $css;
	}

	public function getCSS()
	{
		return $this->_css;
	}


	public function setJS($js = array(), $act = 'append')
	{
		 if($act == 'append')
		 	foreach($js as $j) array_push($this->_js, $j);
		 else 
		 	$this->_js = $js;
	}

	public function getJS()
	{
		return $this->_js;
	}
};