<?php
// Renvoie la liste de tous les billets, tier par ID décroisant
function getBillets()
{
	$bdd = new PDO('mysql:host=localhost;dbname=Blog;charset=utf8', 
          'root', '');
    $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,' . ' BIL_TITRE as title, BIL_CONTENU as content from T_BILLET' . ' order by BIL_ID desc');
    return $billets;
}