<?php 

class Connector
{
	$user = "laradev";
	$pass = "password"; 

	public function connect($pdo)
	{
		$pdo = new PDO("mysql://127.0.0.1;dbname=regis", $user, $pass); 
	}
}

