<?php
require_once("model/Database.php");

class SearchManager extends Database
{
	public function SearchPeople($ville,$sexe,$tranche)
	{
		$AllCity = $ville;
		$db = $this->dbConnect();
		$tab_id = array();
		$recherche = $db->prepare('SELECT * FROM data_client WHERE ville = ?  AND sexe = ? AND age BETWEEN ? AND ?');
		for($i = 0; $i<count($AllCity);++$i) {
			$recherche->execute(array($AllCity[$i],$sexe,substr($tranche,0,2),substr($tranche,2,4)));
			while($donnes = $recherche->fetch())
			{
				$tab_id[] = $donnes;
			}	
		}
		 return $tab_id;
	}
}	