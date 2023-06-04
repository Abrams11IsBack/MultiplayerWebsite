<?php

class MyDatabase {

	public $database_socket;

	private static $dsn = 'mysql:host=';
	private static $mysql_host = 'localhost';
	private static $port = '3306';
	private static $username = 'login';
	private static $password = 'hasło';
	private static $database_name = 'nazwa_bazy';

	function __construct($mysql_host, $port, $username, $password, $database_name) {
		self::$mysql_host = $mysql_host;
		self::$port = $port;
		self::$username = $username;
		self::$password = $password;
		self::$database_name = $database_name;
	}

	public static function getPDO() { // a po co statik?
		if(isset(self::$database_socket))
			return $database_socket;

		try {
			$database_socket = new PDO(self:$dsn.self:$mysql_host.';dbname='.self:$database_name.';port='.self:$port, self:$username, self:$password);
		} catch(PDOException $e) {
			echo 'Eror: ' . $e->getMessage();
		}
	}
}

// PANEL KONTROLNY
if (isset($_POST['mysql_host'])) {
	$mysql_host = $_POST['mysql_host'];
	$port = $_POST['port'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$database_name = $_POST['database_name'];

	$myDatabase = new MyDatabase($mysql_host, $port, $username, $password, $database_name);

	$query = $_POST['query'];

	$pdo = $myDatabase->getPDO();
	$statement = $pdo->query($query);
	$results = $statement->fetchAll(PDO::FETCH_ASSOC);

	echo '<pre>';
	print_r($results);
	echo '</pre>';
}



?>

<!DOCTYPE html>
<html lang="6969">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POaenl Databazy</title>
</head>
<body>
	<h2>Database Control Panel</h2>
	<form method="POST" action="">
		<label>MySQL Host:</label>
		<input type="text" name="mysql_host" value="<?php echo $myDatabase::$mysql_host; ?>"><br>

		<label>Port:</label>
		<input type="text" name="port"><br/>

		<label>Username:</label>
		<input type="text" name="username"><br/>

		<label>Password:</label>
		<input type="password" name="password"><br/>

		<label>Database Name:</label>
		<input type="text" name="database_name"><br/>

		<label>Qwerty:</label>
		<textarea name="query" rows="5" cols="40" placeholder="Kwerenda:"></textarea><br>

		<input type="submit" name="submit" value="Connect + kwerenda">
	</form>

	<h3>Kwerenda</h3>
	<form method="POST" action="">
		<textarea name="query" rows="5" cols="40" placeholder="Kwerenda:"></textarea><br>
		<input type="submit" name="submit_query" value="Execute Query">
	</form>
</body>
</html>