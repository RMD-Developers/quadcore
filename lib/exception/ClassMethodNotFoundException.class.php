<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassMethodNotFoundException
 *
 * @author jaysonnissi
 */
class ClassMethodNotFoundException extends Exception {
    //put your code here
    public function __construct($methodName, $className, $message = null, $code = 0, $previous = null) {
        
        $message = '<p>The class name : <strong>' . $className . '</strong> do not have a method with a method name : ' . $methodName;
        Log::systemLogMessage($message);
		parent::__construct($message, $code, $previous);
    }
}


