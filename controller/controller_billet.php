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

	

	public function addBil ($title, $content)
	{
		$this->billet->addBillet($title, $content);
		header('Location: index.php?action=passView');
		
	}

	public function updateView($idBillet)
	{
		$billet = $this->billet->getBillet($idBillet);
		$view = new view("updateView");
		$view->generate(array('billet' => $billet));
	}

	public function updateBil($title, $content, $idBillet)
	{
		$this->billet->updateBills($title, $content, $idBillet);

	}

	public function delete($idBillet)
	{
		$this->billet->deleteBills($idBillet);
		header('Location: index.php?action=passView');
	}

}


