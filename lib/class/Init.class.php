<?php

/* 
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Init{
    
	/*
	 * @return replaced sensitive characters to db 
	 * or mysql_real_escape
	 */
    public static function clean($str) 
    {
		$search = array("\\","\x00","\n","\r","\'","'","\x1a");
        $replace = array("\\\\","\\00","\\n","\\r","\'","\'","\\z");
        return str_replace($search, $replace , $str);
    }
	
	/*
	 * @return json format
	 */
	public function _throwResponseData($data)
	{
		return json_encode($data);
	}
};

