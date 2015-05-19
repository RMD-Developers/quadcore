<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class PackageFacade extends Facade{
	
    public static function findPackage($type = "FIND_ALL", $param = null) {
        Database::connect();

		$result = null;
		static::$type = $type; //from Facade.class.php folder lib
		$qry = Package::$findModifiedQry === null? self::getConstQry(static::$type): Package::$findModifiedQry;
		$statement = Database::doPreparedQuery($qry . Package::$conditionQry, 
											$param, true, "Package");
		if ($statement->rowCount() != 0) {
			$result = $statement;
		}
		Database::disconnect();

		return $result;
    }
	
	 public static function modifyPackage($param = null, $type = "INSERT") {
       try{
		Database::connect();
		Database::beginTransaction();
		
		$result = null;
		static::$type = $type; //from Facade.class.php folder lib
		$qry = Package::$findModifiedQry === null? self::getConstQry(static::$type): Package::$findModifiedQry;
		$statement = Database::doPreparedQuery($qry . Package::$conditionQry, 
											$param, true, "Package");
		if ($statement->rowCount() != 0) {
			$result = $statement;
		}
		
		Database::commit();
		Database::disconnect();

		return $result;
		} catch (PDOException $ex) {
			Database::rollBack();
			echo $ex->getMessage();
            Log::dbLog($ex);
        } catch (Exception $ex){
			Log::systemLog($ex);
		}
    }
	
	public static function getConstQry($type){
		switch($type){
			case "FIND_ALL": return Package::FIND_ALL; break;
			case "INSERT": return Package::INSERT_PACKAGE; break;
			case "UPDATE": return Package::UPDATE_PACKAGE; break;
			case "DELETE": return Package::DELETE_PACKAGE; break;
		}
	}
	
}
