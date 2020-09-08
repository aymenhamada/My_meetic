<?php

class Database
{
	protected $db;
	
	public function dbConnect()
	{
		$db = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
		return $db;

	}
	public function setDb($db)
	{
		$this->db = $db;
	}

}