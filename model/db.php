<?php
	function getConnection()
	{
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$dbname = 'enregistrements';

		$dsn = "mysql:host=$host;dbname=$dbname";

		try{
			$db = new PDO($dsn,$user,$password);
		}catch(PDOExeception $ex){
			die('Error : '.$ex->getMessage());
		}
		return $db; 
	}

?>