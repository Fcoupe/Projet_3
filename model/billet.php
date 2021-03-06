<?php  		// Model des requêtes Billet

require_once ('Model/model.php');

class Billet extends Model 
{
	public function getBillets($first, $bilLimite)
	{// Renvoie la liste de tous les billets, tier par ID décroisant
	    $sql = 'SELECT BIL_ID as id, BIL_DATE as date_t,'
	     . ' BIL_TITRE AS title, BIL_CONTENU AS content, BIL_IMG as img'
	     . ' from T_BILLET ORDER BY id DESC LIMIT ' . intval($first) . ',' . intval($bilLimite);
	    $billets = $this->executeReq($sql, array($first, $bilLimite
		));
	    return $billets;
	}

	public function numBil()
	{		// Calcul le nombre de Billet present
		$sql ='SELECT COUNT(*) as numBil FROM T_BILLET';
		$numBil = $this->executeReq($sql, array());
		$bilMax = $numBil->fetch(intval(''));
		return $bilMax;
	}

	public function getBillet($idBillet)
	{// Renvoie les informations sur un billet
		
		$sql = 'SELECT BIL_ID as id,  BIL_DATE as date_t,' 
		. ' BIL_TITRE as title, BIL_CONTENU as content, BIL_IMG as img' 
		. ' from T_BILLET WHERE BIL_ID = ?';
		$billet = $this->executeReq($sql, array($idBillet));

		if ($billet->rowCount() == 1)
		{
			return $billet->fetch(); // Accés a la 1er ligne de resultat
		}

		else 
		{
			throw new Exception ("Aucun Billet ne correspond a l'identifiant '$idBillet'"); 
		}
	}

	public function addBillet ($title, $content)
	{		// Ajoute un Billet en BDD
		$sql = 'INSERT INTO T_BILLET(BIL_DATE, BIL_TITRE, BIL_CONTENU)' . 'VALUES(?, ?, ?)';
		$date = date('Y-m-d H:i:s');
		$billet = $this->executeReq($sql, array($date, $title, $content));
	}

	public function updateBills ($title, $content, $idBillet)
	{		// Modifie un Billet en BDD
		$sql = 'UPDATE T_BILLET SET BIL_TITRE = ?, BIL_CONTENU = ? WHERE BIL_ID = ?';
		$billet = $this->executeReq($sql, array($title, $content, $idBillet));
	}

	public function deleteBills ($idBillet)
	{		// Supprime un Billet en BDD
		$sql ='DELETE fROM T_BILLET WHERE BIL_ID = ?';
		$billet = $this->executeReq($sql, array($idBillet));
	}
}