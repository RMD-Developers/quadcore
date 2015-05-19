<?php


class Autoload {
	/**
	 *
	 * @protected
	 * @array
	 */
	protected $_config = array();

	/**
	 * Constructor
	 *
	 * @load all configured class/data
	 */
	function __construct($param)
	{
		$this->_config = $param;
	}

	/**
	 *
	 * @load all configured class/data
	 * @public require everything [utilities|classes|libraries]
	 */
	public function load()
	{
		$path = array(
				'conf'	=>	CONFIG_PATH,
				'helper'	=>	HELPER_PATH,
			);

		foreach($this->_config as $k => $file){
			foreach($file as $f){
				if(file_exists($path[$k] . $f . '.class.php')) {
					require_once $path[$k] . $f . '.class.php';
				}
				else { 
					require_once $path[$k] . $f . '.php'; 
				}
			}
			
		}
	}

};