<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FileNotFoundException
 *
 * @author jaysonnissi
 */
class FileNotFoundException extends Exception {
    //put your code here
    
    public function __construct( $filePath, $path_origin = null, $message = null, $code = 0, $previous = null) 
    {
        
        $message = '<p>The file could not be found in : <pre>' . $filePath . '</pre></p>';
        $message .= '<p>Error at file path : <pre>' . $path_origin . '</pre></p>';
        Log::systemLogMessage($message, $path_origin);
        parent::__construct($message, $code, $previous);
		
    }
};



