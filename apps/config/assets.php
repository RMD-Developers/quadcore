<?php

/*
 |----------------------
 | Configure assets
 |----------------------
 */

class AssetsLinks {

/** 
 * Include all necessary css files
 * Reminder: Please include only those globally required.
 * 			 You can load other assets too on later init'n/instant'n
 * @array css links
 * ------------------------------ */
public function getCSSLinks()
{
	return array(
		'/assets/css/style.css',
	);
}


/** 
 * Include all necessary js files
 * Reminder: Please include only those globally required.
 * 			 You can load other assets too on later init'n/instant'n
 * @array js links
 * ------------------------------ */
public function getJSLinks()
{
	return array(
		'/assets/js/jquery.min.js',
		'/assets/js/script.js',
		'/assets/js/superfish.js',
	);
}

public function getAppCSSLinks()
{
	return array(
		// plugins
		'/assets/bootstrap/css/bootstrap.min.css',
		'/assets/css/font-awesome/css/font-awesome.min.css',
		'/assets/css/ionicons.min.css',
		// theme & skin
		'/assets/css/AdminLTE.min.css',
		'/assets/css/skins/skin-green.min.css',
	);
}


public function getAppJSLinks()
{
	return array(
		// plugins
		'/assets/plugin/jQuery/jQuery-2.1.4.min.js',
		'/assets/plugin/jQuery/jquery-ui.min.js',
		'/assets/plugin/fastclick/fastclick.min.js',
		'/assets/js/app/fiber.js',
		'/assets/js/app/const.js',
		'/assets/js/app/base.js',
		'/assets/js/app/run.js',
		
		'/assets/bootstrap/js/bootstrap.min.js',

		'/assets/js/app.min.js',
		'/assets/js/pages/dashboard.js',
		'/assets/js/demo.js',
	);
}


}