<?php

require_once ('model/billet.php');
require_once ('model/comments.php');
require_once ('model/user.php');
require_once ('view/view.php');

class controllerUser 
{
	private $user;
	private $billet;
	private $comments;
	private $_pass;

	public function pass()
	{
		return $this->pass;
	}

	public function __construct()
	{
		$this->billet = new Billet();
		$this->comments = new Comments();
		$this->user = new User();
	}

	public function securityTest()
	{
		$pass = $this->user->getPass();

		if (isset($_POST['passPost']) AND $_POST['passPost'] == '$pass')
		{
			header('Location:index.php?action=adminPanel');
		}

		else 
		{
			echo "Mot de passe invalide";
		}
	}

	public function adminPanel()
	{
		$billets = $this->billet->getBillets();
		$view = new view("adminPanel");
		$view->generate(array('billets' => $billets));
	}

	
}