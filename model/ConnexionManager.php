<?php
require_once("model/Database.php");

class ConnexionManager extends Database
{
	public function VerifyMember($email)
	{
		$db = $this->dbConnect();
		$data = $db->prepare('SELECT id, passwd FROM data_client WHERE email = ?');
		$data->execute(array($email));
		$pass = $data->fetch();
		return $pass['passwd'];
	}
	public function CheckValidate($email)
	{
		$db = $this->dbConnect();
		$data = $db->prepare('SELECT activate FROM data_client WHERE email = ?');
		$data->execute(array($email));
		$AccValidate = $data->fetch();
		return $AccValidate['activate'];

	}
}
