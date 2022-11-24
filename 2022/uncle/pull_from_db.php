<?php 

class Connector
{
	public function connect()
	{
		$user = "laradev";

		$pass = "password"; 

		try 

		{

			return new PDO('mysql:host=127.0.0.1;dbname=regis', $user, $pass);

		}

			catch (PDOException $e)

		{

			die($e->getMessage());

		}
	}
}

$pdo = Connector::connect(); 
var_dump($pdo);
