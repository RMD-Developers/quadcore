<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 
class Category extends Entity{

    const FIND_SUB = 'SELECT * FROM tb_subcat';
    const FIND_BOTH = 'SELECT * FROM tb_subcat s JOIN tb_maincat m ON s.maincat_id=m.maincat_id';
    const FIND_MAIN = 'SELECT * FROM tb_maincat';
	
	static $type = null;
    public function __construct($dbhandler = null) {
		if($dbhandler !== null) $this->dbh = $dbhandler;
    }
	
    public function __toString() {
        return "";
    }
}

