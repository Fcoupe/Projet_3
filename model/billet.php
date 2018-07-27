<?php

require_once ('Model/model.php');

class Billet extends Model 
{
	public function getBillets()
	{// Renvoie la liste de tous les billets, tier par ID décroisant
		$db = $this->getDb();
	    $sql = 'select BIL_ID as id, BIL_DATE as date_t,' . ' BIL_TITRE as title, BIL_CONTENU as content from T_BILLET' . ' order by BIL_ID desc';
	    $billets = $this->executeReq($sql);
	    return $billets;
	}

	public function getBillet($idBillet)
	{// Renvoie les informations sur un billet
		$db = $this->getDb();
		$sql = 'SELECT BIL_ID as id,  BIL_DATE as date_t,' . ' BIL_TITRE as title, BIL_CONTENU as content from T_BILLET' . ' WHERE BIL_ID = ?';
		$billet = $this->executeReq($sql, array($idBillet));

		if ($billet->rowCount() == 1)
		{
			return $billet->fetch(); // Accés a la 1er ligne de resultat
		}

		else 
		{
			throw new Exception ("Aucun Billet ne correspond a l'identifiant '$idbillet'"); 
		}
	}
}