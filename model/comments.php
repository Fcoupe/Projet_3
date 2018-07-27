<?php

require_once ('model/model.php');

class Comments extends Model 
{
	public function getComments($idBillet)
	{
		$db = $this->getDb();
		$sql = 'select COM_ID as id, COM_DATE as date_t,'
	    . ' COM_AUTEUR as author, COM_CONTENU as content from T_COM'
	    . ' where BIL_ID=?';
	    $comments = $this->executeReq($sql, array($idBillet));
	    return $comments;
	}
}