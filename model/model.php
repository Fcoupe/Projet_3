<?php

function getBillets()
{// Renvoie la liste de tous les billets, tier par ID décroisant
	$db = getDb();
    $billets = $db->query('select BIL_ID as id, BIL_DATE as date,' . ' BIL_TITRE as title, BIL_CONTENU as content from T_BILLET' . ' order by BIL_ID desc');
    return $billets;
}

function getDb()
{// Connexion a la DataBase, instancie et renvoie l'objet PDO associer
	$db = new PDO('mysql:host=localhost;dbname=Blog;charset=utf8', 
          'root', '');
	return $db;
}