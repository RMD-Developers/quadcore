<?php

/** 
 * @autoload all called classes
 * ------------------------------ */
function __autoload($class_name) {
	$directories = array(CLASS_PATH, CONTROLLER_PATH, ENTITY_PATH, INC_PATH, ERROR_PATH, UTIL_PATH, FACADE_PATH, CORE_APP_PATH);

	foreach ($directories as $directory) {
		if (file_exists($directory . $class_name . '.class.php')) {
			require_once($directory . $class_name . '.class.php');
			return;
		}
	}
}


/** 
 * config variables | autoload utilities
 * @array
 * ------------------------------ */
$config = array();

// configure vars
$config['conf'] = array('database', 'assets');
$config['helper'] = array('helper');

// init -> callback
$loader = new Autoload($config);
$loader->load();
