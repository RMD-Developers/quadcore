<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 
class User extends Entity{
	
    const FIND_ALL = 'SELECT * FROM tb_user u';
    const INSERT = 'INSERT INTO tb_user';
    const UPDATE = 'UPDATE tb_user SET';
    const DELETE = 'DELETE from tb_user';
   
    public function __construct($dbhandler = null) {
		if($dbhandler !== null) $this->dbh = $dbhandler;
    }
	
    public function __toString() {
        return "";
    }
}

