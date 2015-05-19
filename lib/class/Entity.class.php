<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Entity {
    //put your code here
    protected $dbh;
    protected $cond;
	static $conditionQry;
	static $findModifiedQry = null;
	
    function __construct($dbhandler)
    {
		$this->dbh = $dbhandler;
	}
	
	public static function setConditionQry($strQry = null)
	{
		static::$conditionQry = $strQry;
	}
		
	public function getResult($name)
	{
		return $this->$name;
	}
};

/*
// OLD
set conditionQry
Entity::setConditionQry()//for additional query
then 
initialize target Facade
$prod = ProductFacade();
call target function with params
$prod->findAll(array(':emp_id'=>$id))
use $prod
foreach($prod as $prod){$prod->getMetadata('emp_id');}

// NEW
SINGLE RECORD
initialize target facade with name of field as param
$prod = new ProductFacade('emp_id', 'findAll')// * - for all colums
$prod::getRow('prod_id')
//2 or MORE RECORD
$prod = new ProductFacade('emp_id', 'findAll')// * - for all colums
$prod::getRow('prod_id')

*/