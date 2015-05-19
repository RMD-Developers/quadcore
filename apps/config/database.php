<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * ---------------------------------
 * DATABASE Configuration file
 * ---------------------------------
 *
 * This will set the databse setting and other configurations
 * Set the value accoring to the type of environment
 */

/**
 * Test if is development mode
 */
if(ENVIRONMENT === 'development'):
	define('DB_NAME', 'db_quadcore');
	define('DB_SERVER', 'localhost');
	define('MYSQL_CONN_STRING', 'mysql:host='.DB_SERVER.';dbname=');
	define('DEFAULT_CONN_STRING', MYSQL_CONN_STRING . DB_NAME);
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
/**
 * Else if not development
 */
else:
	define('DB_NAME', 'sample_db');
	define('DB_SERVER', 'cloud_server');
	define('MYSQL_CONN_STRING', 'mysql:host='.DB_SERVER.';dbname=');
	define('DEFAULT_CONN_STRING', MYSQL_CONN_STRING . DB_NAME);
	define('DB_USERNAME', '');
	define('DB_PASSWORD', '');
endif;
