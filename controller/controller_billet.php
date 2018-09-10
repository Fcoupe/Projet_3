<?php 		// Controlleur des fonctions Billets

require_once ('model/billet.php');
require_once ('model/comments.php');
require_once ('view/view.php');

class controllerBillet 
{
	private $billet;
	private $comments;

	public function __construct()
	{		// instanciation des fonctions
		$this->billet = new Billet();
		$this->comments = new Comments();
	}

	public function billet($idBillet)
	{		// Recuperation des donnée Billet et création de la vue 
		$billet = $this->billet->getBillet($idBillet);
		$comments = $this->comments->getComments($idBillet);
		$view = new view('billet');
		$view->generate(array('billet' => $billet, 'comments' => $comments));
	}

	

	public function addBil ($title, $content)
	{		// Ajout de Billet et redirection
		$this->billet->addBillet($title, $content);
		header('Location: index.php?action=adminPanel');
		
	}

	public function updateView($idBillet)
	{		// Recuperation données billet et création de la vue
		$billet = $this->billet->getBillet($idBillet);
		$view = new view("updateView");
		$view->generate(array('billet' => $billet));
	}

	public function updateBil($title, $content, $idBillet)
	{		// Modification du billet et redirection
		$this->billet->updateBills($title, $content, $idBillet);
		header('Location: index.php?action=adminPanel');

	}

	public function delete($idBillet)
	{		// Suppression du Billet et redirection
		$this->billet->deleteBills($idBillet);
		$this->comments->delete($idBillet);
		header('Location: index.php?action=adminPanel');
	}

	public function billetAdmin($idBillet)
	{		// Récuperation données Billet et création de la vue
		$billet = $this->billet->getBillet($idBillet);
		$comments = $this->comments->getComments($idBillet);
		$view = new view('billetAdmin');
		$view->generate(array('billet' => $billet, 'comments' => $comments));
	}
}


