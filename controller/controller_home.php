<?php
require_once ('model/billet.php');
require_once ('view/view.php');

class controllerHome 
{
	private $billet;

	public function __construct()
	{
		$this->billet = new Billet();
	}

	public function home()
	{
		$billets = $this->billet->getBillets();
		$view = new view("home");
		$view->generate(array('billets' => $billets));
	}
}