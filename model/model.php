<?php

function getBillets()
{// Renvoie la liste de tous les billets, tier par ID décroisant
	$db = getDb();
    $billets = $db->query('select BIL_ID as id, BIL_DATE as date_t,' . ' BIL_TITRE as title, BIL_CONTENU as content from T_BILLET' . ' order by BIL_ID desc');
    return $billets;
}

function getDb()
{// Connexion a la DataBase, instancie et renvoie l'objet PDO associer
	$db = new PDO('mysql:host=localhost;dbname=Blog;charset=utf8', 
          'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	return $db;
}

function getBillet($idBillet)
{// Renvoie les informations sur un billet
	$db = getDb();
	$billet = $db->prepare('SELECT BIL_ID as id,  BIL_DATE as date_t,' . ' BIL_TITRE as title, BIL_CONTENU as content from T_BILLET' . ' WHERE BIL_ID = ?');
	$billet->execute(array($idBillet));

	if ($billet->rowCount() == 1)
	{
		return $billet->fetch(); // Accés a la 1er ligne de resultat
	}

	else 
	{
		throw new Exception ("Aucun Billet ne correspond a l'identifiant '$idbillet'"); 
	}
}

function getComments($idBillet)
{
	$db = getDb();
	$comments = $db->prepare('select COM_ID as id, COM_DATE as date_t,'
    . ' COM_AUTEUR as author, COM_CONTENU as content from T_COM'
    . ' where BIL_ID=?');
    $comments->execute(array($idBillet));
    return $comments;
}

