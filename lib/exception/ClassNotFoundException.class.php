<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassNotFoundException
 *
 * @author jaysonnissi
 */
class ClassNotFoundException extends Exception{

    public function __construct($className, $message = null, $code = 0, $previous = null) {
        
        $message = '<p>The class with the class name : <strong>' . $className . '</strong> do not exist ';
        parent::__construct($message, $code, $previous);
		
    }
}


