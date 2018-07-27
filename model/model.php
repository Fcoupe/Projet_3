<?php

 abstract class Model {

	private $db; // Objet PDO d'accés a la DataBase

	
	protected function executeReq($sql, $params = null)
	{
		if ($params == null)
		{
			$result = $this->getDb()->query($sql); // exécution direct
		}

		else
		{
			$result = $this->getDb()->prepare($sql);
			$result->execute($params);
		}
	}

	private function getDb()
	{// Connexion a la DataBase, instancie et renvoie l'objet PDO associer
		if ($this->db == null)
		{
		$db = new PDO('mysql:host=localhost;dbname=Blog;charset=utf8', 
	          'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
	
		return $this->$db;
	}
}

