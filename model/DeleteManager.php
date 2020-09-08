<?php
require_once("model/Database.php");

class DeleteManager extends Database
{
	public function DeleteAccount($id)
	{
		$db = $this->dbConnect();
		$delete = $db->prepare('UPDATE data_client SET activate = false WHERE id = ?');
		$delete->execute(array($id));
		return $delete;
	}
}