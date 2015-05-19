<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 
class Product extends Entity{
	
    const FIND_ALL = 'SELECT * FROM tb_product p';
    const FIND_WITH_SCAT = 'SELECT * FROM tb_product p JOIN tb_subcat s ON p.subcat_id=s.subcat_id';
    const FIND_WITH_MCAT = 'SELECT * FROM tb_product p JOIN tb_subcat s ON p.subcat_id=s.subcat_id JOIN tb_maincat m ON s.maincat_id=m.maincat_id';
	const UPDATE_PRODUCT = 'UPDATE tb_product SET';
	const INSERT_PRODUCT = 'INSERT INTO tb_product ';
	const DELETE_PRODUCT = 'DELETE FROM tb_product WHERE ';
    public function __construct($dbhandler = null) {
		if($dbhandler !== null) $this->dbh = $dbhandler;
    }
	
    public function __toString() {
        return "";
    }
}

