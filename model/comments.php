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

	 public function addComment($author, $content, $idBillet)
	 { // Ajout un commentaire a la base
	 	$sql = 'insert into T_COM(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID)' . ' values(?, ?, ?, ?)';
	 $date = date('Y-m-d H:i:s'); // recupére la date courante
	 $this->executeReq($sql , array($date, $author, $content, $idBillet));
	 }
}