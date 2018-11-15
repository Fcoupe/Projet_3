<?php  		// Model des requêtes de Comments

require_once ('model/model.php');

class Comments extends Model 
{
	public function getComments($idBillet)
	{		// Récupere et renvoie les commentaires associer a un Billet
		$sql = 'select COM_ID as id, COM_DATE as date_t,'
	    . ' COM_AUTEUR as author, COM_CONTENU as content from T_COM'
	    . ' where BIL_ID=?';
	    $comments = $this->executeReq($sql, array($idBillet));
	    return $comments;
	}

	public function getComment($idCom)
	{// Recupere er renvoie les informations sur un billet
		
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
	{		// Calcul le nombre de commentaire présent en BDD
		$sql = 'SELECT COUNT(*) as numb FROM T_COM';
		$numb = $this->executeReq($sql, array());
		$numbMax = $numb->fetch(intval(''));
		return $numbMax;	
	}

	public function allCom($firstText, $comMax)
	{		// Récupere et renvoie tout les commentaire 
		$sql = 'SELECT COM_ID as id,  COM_DATE as date_t, COM_AUTEUR as author, COM_CONTENU as content, BIl_ID as idBillet, REPORT as report from T_COM ORDER BY report DESC LIMIT ' . intval($firstText) . ',' . intval($comMax);
		$allComReq = $this->executeReq($sql, array($firstText, $comMax));
		$allCom = $allComReq->fetchAll();
		return $allCom;
	}

	 public function addComment($author, $content, $idBillet)
	 { // Ajout un commentaire a la BDD
	 	$sql = 'insert into T_COM(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID, REPORT)' 
	 	. ' values(?, ?, ?, ?, 0)';
	 $date = date('Y-m-d H:i:s'); // recupére la date courante
	 $this->executeReq($sql , array($date, $author, $content, $idBillet));
	 }

	 public function deleteCom ($idCom)
	 {		// Supprime un commentaire de la BDD 
	 	$sql = 'DELETE FROM T_COM WHERE COM_ID = ?';
	 	$comments = $this->executeReq($sql, array($idCom));
	 }

	 public function delete($idBillet)
	 {
	 	$sql = 'DELETE FROM T_COM WHERE BIL_ID = ?';
	 	$comments = $this->executeReq($sql, array($idBillet)); 
	 }

	 public function numbReport($idCom)
	 {
	 	$sql = 'UPDATE T_COM SET REPORT = REPORT + 1 WHERE COM_ID = ?';
	 	$report = $this->executeReq($sql, array($idCom));
	 }
}