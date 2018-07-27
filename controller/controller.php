<?php

require ('model/model.php');

// Affiche la liste de tous les billets du blog 
function home()
{
	$billets = getBillets();
	require ('view/view_index.php');
}

// Affiche les detalis sur un billet
function billet($idBillet)
{
	$billet = getBillet($idBillet);
	$comments = getComments($idBillet);
	require ('view/view_billet.php');
}

//Affichage des erreurs
function error($msgError)
{
	require ('view/view_error.php');
}