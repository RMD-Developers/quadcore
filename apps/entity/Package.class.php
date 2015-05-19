<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 
class Package extends Entity{
	
    const FIND_ALL = 'SELECT * FROM tb_package pa';
    const UPDATE_PACKAGE = 'UPDATE tb_package SET';
	const INSERT_PACKAGE = 'INSERT INTO tb_package ';
	const DELETE_PACKAGE = 'DELETE FROM tb_package WHERE ';
    public function __construct($dbhandler = null) {
		if($dbhandler !== null) $this->dbh = $dbhandler;
    }
	
    public function __toString() {
        return "";
    }
}

