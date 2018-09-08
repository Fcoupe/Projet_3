<?php  		//Connection a la BDD et automatisation des requêtes

 abstract class Model {

	private $db; // Objet PDO d'accés a la DataBase

	
	protected function executeReq($sql, $params = null)
	{ 		// Automatisation des requêtes suivant les paramatres
		if ($params == null)
		{
			$result = $this->getDb()->query($sql); // exécution direct
		}

		else
		{
			$result = $this->getDb()->prepare($sql);
			$result->execute($params);
		}
		return $result;
	}

	private function getDb()
	{// Connexion a la DataBase, instancie et renvoie l'objet PDO associer
		if ($this->db == null)
		{
		$this->db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 
	          'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
	
		return $this->db;
	}
}

