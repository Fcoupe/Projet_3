<?php 		// Controlleur Page d'accueil
require_once ('model/billet.php');
require_once ('view/view.php');

class controllerHome 
{
	private $billet;

	public function __construct()
	{		// Instaciation de la fonction Billet
		$this->billet = new Billet();
	}

	public function home($page)
	{		// Récuperation des donnés et création de la vue 
		$bilMax = $this->billet->numBil();
		$bilLimite = 3;
		$numberPage = ceil(intval($bilMax['numBil']) / $bilLimite);
		$first = ($page - 1 ) * intval($bilLimite);

		$billets = $this->billet->getBillets(intval($first), intval($bilLimite));
		$view = new view("home");
		$view->generate(array('billets' => $billets, 'bilLimite' => $bilLimite, 'numberPage' => $numberPage));
	}
}