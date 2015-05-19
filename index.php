<?php
/**
 * @Author RMD
 *
 * @Description - This is the core file of the system.
 * Whatever tools and apps, and other classes
 * needed in the system will be auto-included in this
 * configuration by default.
 *
 * @IMPORTANT - Never change any of the line below
 * if you don't know what you're doing, else
 * system errors might occur based on
 * exception encountered.
 * !DJM
 */

/**
 * ------------------------------
 * APLICATION ENVIRONMENT
 * ------------------------------
 *
 * Set the environment for the system.
 * This will indicate if the system is being used under
 * development, testing or deployment.
 * IF development, development config will be used
 * ELSEIF testing, testing config is being used
 * ELSE the deployment config will be used to the system
 *
 */
 define('ENVIRONMENT', 'development');
 
/**
 *
 *
 *
 *
 *
 *
 *
 *
 *
 * Important Note: Enable error reporing function
 * to make sure that all errors will
 * be caught and show if possible
 * @start debug
 */
 ini_set('display_errors',1);
 ini_set('display_startup_errors',1);
 error_reporting(-1);
 error_reporting(E_ALL);

/**
 *
 *
 *
 *
 *
 *
 *
 * Note: Turn on Gzip php function to compress all files
 * necessary in the development! This can be done 
 * in .htaccess to cache data
 */
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler");
else ob_start();

/**
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 * Note: Start session
 * Starting session will allow variable-value pair to be save
 * to be stored temporarily as long as the session is alive!
 */
if(!session_start())session_start();

/**
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 * Note: Set Default TimeZone
 * for your local country
 */
 $timezone = "Asia/Singapore";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
		
/**
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 * Note: Define CONSTANTS
 * These are readable constant used inside the system
 * Used in loading classes and importing files
 */
 define("BASE_PATH", realpath(__DIR__) . '/');
 define("APP_PATH", BASE_PATH . "apps/");
 define("CONTROLLER_PATH", APP_PATH . "controller/");
 define("MODEL_PATH", APP_PATH . "model/");
 define("VIEW_PATH", APP_PATH . "view/");
 define("CONFIG_PATH", APP_PATH . "config/");
 define("ENTITY_PATH", APP_PATH . "entity/");
 define("FACADE_PATH", APP_PATH . "facade/");
 define("CORE_APP_PATH", APP_PATH . "core/");
 define("HELPER_PATH", APP_PATH . "helper/");

 define("LIB_PATH", BASE_PATH . "lib/");
 define("CACHE_PATH", LIB_PATH . "cache/");
 define("CLASS_PATH", LIB_PATH . "class/");
 define("INC_PATH", LIB_PATH . "inc/");
 define("UTIL_PATH", LIB_PATH . "util/");
 define("ERROR_PATH", LIB_PATH . "exception/");

 define("FILE_PATH", BASE_PATH . "files/");
 define("LOG_PATH", FILE_PATH . "log/error/");

/**
 *
 * Note: Set server path
 * @init const for paths
 */
 $protocol = "http://";
 $domain = $_SERVER["HTTP_HOST"];

 define("SERVER_PATH", $protocol . $domain . "/");

 define("ASSETS_PATH", SERVER_PATH . "assets/");
 define("IMG_PATH", ASSETS_PATH . "imgs/");
 define("CSS_PATH", ASSETS_PATH . "css/");
 define("JS_PATH", ASSETS_PATH . "js/");

/**
 *
 * !Important:
 * @include autoloaders for classes
 */
include_once(INC_PATH . "inc.php");

/*
 | ------------------------------
 | 	IT STARTS EVERYTHING HERE!
 | ------------------------------
 |
 V
 */
try {
	/*
	 * !Important: storing and accessing global variables
	 * @init registry
	 */
	$registry = new Registry;


	/*
	 * @load Controller > View via Router > Template(Shows file being routed)
	 */
	$registry->template = new Template($registry);
	$registry->router = new Router($registry);
	$registry->router->loader();  // !LAUNCH APP
	
	/*
	 * Catching all prossible errors
	 */
} catch (FileNotFoundException $ex) {
	echo $ex->getMessage();
	echo '<pre>' . $ex->getTraceAsString() . '</pre>';
	Log::systemLog($ex);
} catch (ClassNotFoundException $ex) {
	echo $ex->getMessage();
	echo '<pre>' . $ex->getTraceAsString() . '</pre>';
	Log::systemLog($ex);
} catch (ClassMethodNotFoundException $ex) {
	echo $ex->getMessage();
	echo '<pre>' . $ex->getTraceAsString() . '</pre>';
	Log::systemLog($ex);
} catch (Exception $ex){
	echo $ex->getMessage();
	echo '<pre>' . $ex->getTraceAsString() . '</pre>';
	Log::systemLog($ex);
}