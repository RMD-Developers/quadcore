<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 
class Database {

    private static $connect = null;
    protected static $reg = null;

    private function __contruct($registry) {
        $this->reg = $registry;
    }

    public static function connect($_connString = null, $_username = null, $_password = null) {
        $connString = $_connString !== null ? $_connString : DEFAULT_CONN_STRING;
        $username = $_username !== null ? $_username : DB_USERNAME;
        $password = $_password !== null ? $_password : DB_PASSWORD;
        
        if (self::$connect === null) {
            self::$connect = new PDO( $connString, $username, $password, array(PDO::ATTR_PERSISTENT => true));
            self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    public static function beginTransaction() {
        self::$connect->beginTransaction();
    }

    public static function commit() {
        self::$connect->commit();
    }

    public static function rollBack() {
        self::$connect->rollBack();
    }

    public static function doQuery($query) {
        return self::$connect->query($query);
    }

    public static function doPreparedQuery($query, $parameters = null, $type = false, $class = "Product") {
        $statement = self::$connect->prepare($query);
		if($type !== false){
			$statement->setFetchMode(PDO::FETCH_CLASS, "$class", array($query));
		}
        $statement->execute($parameters);
		
        return $statement;
    }

    public static function disconnect() {
        self::$connect = null;
    }

    public static function changeDatabase($database) {
        self::$connect->exec('Use ' . $database);
    }

    public function __destruct() {
        self::$connect = null;
    }

}


