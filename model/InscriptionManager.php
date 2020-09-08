<?php
require_once("model/Database.php");

class InscriptionManager extends Database 
{
	
	public function postNewMember($nom, $prenom, $naissance, $sexe, $ville, $email, $passwd)
	{
		$db = $this->dbConnect();
		$data = $db->prepare('INSERT INTO data_client(activate, age, nom, prenom, naissance, sexe, ville, email, passwd) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
		$member = $data->execute(array('true',$this->checkAge($naissance), $nom, $prenom, $naissance, $sexe, $ville, $email, $passwd));
		return $member;
	}
	public function checkAge($date)
	{
		$age = floor((time() - strtotime($date)) / 31556926);
		return $age;
	}
	public function checkEmail($email)
	{
		$db = $this->dbConnect();
		$data = $db->prepare('SELECT COUNT(*) FROM data_client WHERE email = ?');
		$data->execute(array($email));
		$nbr = $data->fetch();
		return $nbr['COUNT(*)'];
	}
	public function NamePhotos()
	{
		$db = $this->dbConnect();
		$data = $db->query('SELECT id from data_client ORDER BY id DESC LIMIT 1');
		$id = $data->fetch();
		return $id['id'];
	}
}

	