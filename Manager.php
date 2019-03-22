<?php

/**
 *  connection a la base de donnee
 */
class Manager
{
	public function dbConnect()
	{
		$db = new PDO('mysql:host=localhost;dbname=urc;charset=utf8','root','root');
		return $db;
	}
}