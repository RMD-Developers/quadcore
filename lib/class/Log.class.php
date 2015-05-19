<?php
/*
 * @author RDM 
 * In credit to Denmark Jay Mago, Ramon Soldevilla and Macky Licup
 * for developing the web pages...
 * @copyright 2014
 * 
 */

/**
 *	Description of Log - Error logging
 *  by DJay
 */

Class Log {

	private static $dateLog = null;
	
	public static function dbLog(Exception $ex) 
	{
		static::$dateLog  = date("F d, Y h:i a", time());
		
		$file = fopen( LOG_PATH . 'db_error.txt', 'a');
		
		fwrite($file, $ex->getMessage());
		fwrite($file, $ex->getTraceAsString());
		fwrite($file, "\n ------------------------------------------ {{ " . static::$dateLog . " }}------------------------------------------\n");
		fclose( $file);
	}

	public static function systemLog(Exception $ex) 
	{
		static::$dateLog  = date("F d, Y h:i a", time());
		
		$file = fopen( LOG_PATH . 'log_error.txt', 'a');
		fwrite($file, $ex->getMessage());
		fwrite($file, "\n" . $ex->getTraceAsString());
		fwrite($file, "\n ------------------------------------------ {{ " . static::$dateLog . " }}------------------------------------------\n");
		
		fclose( $file);
	}
	
	public static function systemLogMessage($mes = null)
	{
		$file = fopen( LOG_PATH . 'log_error.txt', 'a');
		if($mes !== null) fwrite($file, "\n" . $mes);
			
		fclose( $file);
	}

};