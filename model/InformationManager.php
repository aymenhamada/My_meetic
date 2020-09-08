<?php
require_once("model/Database.php");

class InformationManager extends Database
{
	public function GetName($email)
	{
		$db = $this->dbConnect();
		$data = $db->prepare('SELECT nom FROM data_client WHERE email = ?');
		$data->execute(array($email));
		$name = $data->fetch();
		return $name['nom'];
	}
	public function GetPreName($email)
	{
		$db = $this->dbConnect();
		$data = $db->prepare('SELECT prenom FROM data_client WHERE email = ?');
		$data->execute(array($email));
		$prename = $data->fetch();
		return $prename['prenom'];
	}
	public function GetBirthDay($email)
	{
		$db = $this->dbConnect();
		$data = $db->prepare('SELECT naissance FROM data_client WHERE email = ?');
		$data->execute(array($email));
		$birth = $data->fetch();
		return $birth['naissance'];

	}
	public function GetSexe($email)
	{
		$db = $this->dbConnect();
		$data = $db->prepare('SELECT sexe FROM data_client WHERE email = ?');
		$data->execute(array($email));
		$gender = $data->fetch();
		return $gender['sexe'];
	}
	public function GetCity($email)
	{
		$db = $this->dbConnect();
		$data = $db->prepare('SELECT ville FROM data_client WHERE email = ?');
		$data->execute(array($email));
		$city = $data->fetch();
		return $city['ville'];
	}
	public function GetEmail($email)
	{
		$db = $this->dbConnect();
		$data = $db->prepare('SELECT email FROM data_client WHERE email = ?');
		$data->execute(array($email));
		$mail = $data->fetch();
		return $mail['email'];
	}
	public function GetId($email)
	{
		$db = $this->dbConnect();
		$data = $db->prepare('SELECT id FROM data_client WHERE email = ?');
		$data->execute(array($email));
		$id = $data->fetch();
		return $id['id'];
	}
	public function CountMember()
	{
		$db = $this->dbConnect();
		$data = $db->query('SELECT count(id) FROM data_client');
		$count = $data->fetch();
		return $count['count(id)'];
	}

}
