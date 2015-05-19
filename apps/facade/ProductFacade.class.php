<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ProductFacade extends Facade{
	
    public static function findProduct($type = "FIND_ALL", $param = null) {
        Database::connect();

		$result = null;
		static::$type = $type; //from Facade.class.php folder lib
		$qry = Product::$findModifiedQry === null? self::getConstQry(static::$type): Product::$findModifiedQry;
		$statement = Database::doPreparedQuery($qry . Product::$conditionQry, 
											$param, true, "Product");
		if ($statement->rowCount() != 0) {
			$result = $statement;
		}
		Database::disconnect();

		return $result;
    }
	
	 public static function modifyProduct($param = null, $type = "INSERT") {
       try{
		Database::connect();
		Database::beginTransaction();
		
		$result = null;
		static::$type = $type; //from Facade.class.php folder lib
		$qry = Product::$findModifiedQry === null? self::getConstQry(static::$type): Product::$findModifiedQry;
		$statement = Database::doPreparedQuery($qry . Product::$conditionQry, 
											$param, true, "Product");
		if ($statement->rowCount() != 0) {
			$result = $statement;
		}
		
		Database::commit();
		Database::disconnect();

		return $result;
		} catch (PDOException $ex) {
			Database::rollBack();
			echo $ex->getMessage();
            Log::dbLog($ex->getMessage());
        } catch (Exception $ex){
			Log::systemLog($ex->getMessage());
		}
    }
	
	public static function getConstQry($type){
		switch($type){
			case "FIND_ALL": return Product::FIND_ALL; break;
			case "FIND_WITH_SCAT": return Product::FIND_WITH_SCAT; break;
			case "FIND_WITH_MCAT": return Product::FIND_WITH_MCAT; break;
			case "INSERT": return Product::INSERT_PRODUCT; break;
			case "UPDATE": return Product::UPDATE_PRODUCT; break;
			case "DELETE": return Product::DELETE_PRODUCT; break;
		}
	}
	
}
