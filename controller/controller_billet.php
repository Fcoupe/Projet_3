<?php

require_once ('model/billet.php');
require_once ('model/comments.php');
require_once ('view/view.php');

class controllerBillet 
{
	private $billet;
	private $comments;

	public function __construct()
	{
		$this->billet = new Billet();
		$this->comments = new Comments();
	}

	public function billet($idBillet)
	{
		$billet = $this->billet->getBillet($idBillet);
		$comments = $this->comments->getComments($idBillet);
		$view = new view('billet');
		$view->generate(array('billet' => $billet, 'comments' => $comments));
	}
}


//Affichage des erreurs
function error($msgError)
{
	require ('view/view_error.php');
}