<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class CategoryFacade extends Facade{
	
    public static function findCategory($type = "FIND_BOTH", $param = null) {
		Database::connect();
		
		$result = null;
		static::$type = $type;
		$qry = Category::$findModifiedQry === null? self::getConstQry(static::$type): Category::$findModifiedQry;
		$statement = Database::doPreparedQuery($qry . Category::$conditionQry, 
												$param, true, "Category");
		if ($statement->rowCount() != 0) {
			$result = $statement;
		}
		Database::disconnect();

		return $result;
    }
	
	public static function getConstQry($type){
		switch($type){
			case "FIND_BOTH": return Category::FIND_BOTH; break;
			case "FIND_MAIN": return Category::FIND_MAIN; break;
			case "FIND_SUB": return Category::FIND_SUB; break;
		}
	}
	
}
