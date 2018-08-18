<?php

require_once ('model/model.php');

class Comments extends Model 
{
	public function getComments($idBillet)
	{
		$sql = 'select COM_ID as id, COM_DATE as date_t,'
	    . ' COM_AUTEUR as author, COM_CONTENU as content from T_COM'
	    . ' where BIL_ID=?';
	    $comments = $this->executeReq($sql, array($idBillet));
	    return $comments;
	}

	public function getComment($idCom)
	{// Renvoie les informations sur un billet
		
		$sql = 'SELECT COM_ID as id,  COM_DATE as date_t,' 
		. ' COM_AUTEUR as author, COM_CONTENU as content from T_COM ' 
		. ' WHERE COM_ID = ?';
		$comments = $this->executeReq($sql, array($idCom));

		if ($comments->rowCount() == 1)
		{
			return $comments->fetch(); // Accés a la 1er ligne de resultat
		}

		else 
		{
			throw new Exception ("Aucun Commentaire ne correspond a l'identifiant '$idCom'"); 
		}
	}

	public function numberCom()
	{
		$sql = 'SELECT COUNT(*) as numb FROM T_COM';
		$numb = $this->executeReq($sql, array());
		$numbMax = $numb->fetch(intval(''));
		return $numbMax;

		
	}

	public function allCom()
	{
		$sql = 'SELECT COM_ID as id,  COM_DATE as date_t, COM_AUTEUR as author, COM_CONTENU as content from T_COM LIMIT 0, 5';
		$allComReq = $this->executeReq($sql);
		$allCom = $allComReq->fetchAll();
		return $allCom;
	}

	 public function addComment($author, $content, $idBillet)
	 { // Ajout un commentaire a la base
	 	$sql = 'insert into T_COM(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID)' 
	 	. ' values(?, ?, ?, ?)';
	 $date = date('Y-m-d H:i:s'); // recupére la date courante
	 $this->executeReq($sql , array($date, $author, $content, $idBillet));
	 }

	 

	 public function deleteCom ($idCom)
	 {
	 	$sql = 'DELETE FROM T_COM WHERE COM_ID = ?';
	 	$comments = $this->executeReq($sql, array($idCom));
	 }
}