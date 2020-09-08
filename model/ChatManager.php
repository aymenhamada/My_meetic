<?php
require_once("model/Database.php");

class ChatManager extends database
{

	public function InsertMessage($id, $content)
	{
		$db = $this->dbConnect();
		$data = $db->prepare('INSERT INTO chat_club(id_auteur, date, message) VALUES(?, NOW(), ?)');
		$message = $data->execute(array($id, $content));
		return $message;
	}

	public function getAuthorName($name)
		{
		$db = $this->dbConnect();
		$auteur = $db->prepare('SELECT data_client.nom, data_client.prenom, data_client.id, data_client.sexe FROM chat_club INNER JOIN data_client ON data_client.id = chat_club.id_auteur WHERE chat_club.id_auteur = ?');
		$auteur->execute(array($name));
		$result = $auteur->fetch();
		return $result;
	}

	public function getAuthor()
	{
		$db = $this->dbConnect();
		$all = array();
		$msg = $db->query('SELECT  id_auteur FROM chat_club ORDER BY id ASC');
		while ($author = $msg->fetch()) {
			$all[] = $this->getAuthorName($author['id_auteur']);
		}
		return $all;
	}

	public function getMessage()
	{
		$db = $this->dbConnect();
		$allmsg = array();
		$message = $db->query('SELECT message, date FROM chat_club');
		return $message;
	}
	public function getPhotos($id)
	{
		$db = $this->dbConnect();
		$getId = $db->prepare('SELECT id FROM data_client WHERE id = ?');
		$getId->execute(array($id));
		$id = $getId->fetch();
		return $id['id'];
	}
	public function getProfile($id)
	{
		$db = $this->dbConnect();
		$getProfile = $db->prepare('SELECT * from data_client WHERE id = ? ');
		$getProfile->execute(array($id));
		return $getProfile;
	}
	public function autoDelete($id)
	{
		$db = $this->dbConnect();
		$auto = $db->prepare('DELETE FROM chat_club WHERE id = ?');
		$auto->execute(array($id));
		return $auto;
	}
	public function getOldestMessage()
	{
		$db = $this->dbConnect();
		$get = $db->prepare('SELECT id FROM chat_club ORDER BY id ASC LIMIT 0,1');
		$get->execute();
		$yes = $get->fetch();
		return $yes;
	}
}