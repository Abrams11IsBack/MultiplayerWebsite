<?php

class MyDatabase {

	public $database_socket;

	private static $dsn = 'mysql:host=';
	private static $mysql_host = 'localhost';
	private static $port = '3306';
	private static $username = 'login';
	private static $password = 'hasło';
	private static $database_name = 'nazwa_bazy';

	public static function getPDO() { 
		if(isset(self::$database_socket))
			return $database_socket;

		try {
			$database_socket = new PDO(self:$dsn.self:$mysql_host.';dbname='.self:$database_name.';port='.self:$port, self:$username, self:$password);
		} catch(PDOException $e) {
			echo 'Eror: ' . $e->getMessage();
		}
	}
}
?>