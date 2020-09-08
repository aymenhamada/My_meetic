<?php
require_once("model/Database.php");

class UpdateManager extends Database
{
	public function UpdateMember($name,$prename,$birth,$sexe,$city,$email,$id)
	{
		$db = $this->dbConnect();
		$update = $db->prepare('UPDATE data_client SET nom = :nom,  prenom = :prenom, naissance = :naissance, sexe = :sexe, ville = :ville, email = :email, age = :age WHERE id = :id');
		$update->execute(array(
							'nom' => $name,
							'prenom' => $prename,
							'naissance' => $birth,
							'sexe' => $sexe,
							'ville' => $city,
							'email' => $email,
							'id' => $id,
							'age' => $this->checkAge($birth)));
		return $update;	
	}	
	public function AvoidEmailError($id)
	{
		$db = $this->dbConnect();
		$avoid = $db->prepare('SELECT email FROM data_client WHERE id = ?');
		$avoid->execute(array($id));
		$email = $avoid->fetch();
		return $email['email'];
	}
	public function ChangePassWord($newpassword,$email)
	{
		$db = $this->dbConnect();
		$change = $db->prepare('UPDATE data_client SET passwd = :passwd WHERE email = :email');
		$change->execute(array(
							'passwd' => $newpassword,
							"email" => $email));
		return $change;
	}
	public function checkAge($date)
	{
		$age = floor((time() - strtotime($date)) / 31556926);
		return $age;
	}
}