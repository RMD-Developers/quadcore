<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class UserFacade extends Facade{
	
    public static function findUser($type = "FIND_ALL", $param = null) {
        Database::connect();

		$result = null;
		static::$type = $type;
		$qry = User::$findModifiedQry === null? self::getConstQry(static::$type): User::$findModifiedQry;
		$statement = Database::doPreparedQuery($qry . User::$conditionQry, 
											$param, true, "User");
		if ($statement->rowCount() != 0) {
			$result = $statement;
		}
		Database::disconnect();

		return $result;
    }
	
	public static function modifyUser($param, $type = "INSERT"){
		try{
			Database::connect();
			Database::beginTransaction();
			
			$result = null;
			static::$type = $type;
			$qry = User::$findModifiedQry === null? self::getConstQry(static::$type): User::$findModifiedQry;
			$statement = Database::doPreparedQuery($qry . User::$conditionQry, 
												$param, true, "User");
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
        }
	}
	
	public static function getConstQry($type){
		switch($type){
			case "FIND_ALL": return User::FIND_ALL; break;
			case "INSERT": return User::INSERT; break;
			case "UPDATE": return User::UPDATE; break;
			case "DELETE": return User::DELETE; break;
		}
	}
	
}
