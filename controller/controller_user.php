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

	

	public function __construct()
	{
		$this->billet = new Billet();
		$this->comments = new Comments();
		$this->user = new User();
	}

	public function securityTest($passPost)
	{
		$pass = $this->user->getPass();
		
		if (isset($_POST['passPost']) AND $_POST['passPost'] == $pass)
		{
			// session_start();
			// $_SESSION['pass'] = $pass['pass'];
			header('Location:index.php?action=adminPanel');
			echo "Vous etes connecter !";
		}

		else
		{
				$var =  $pass;
			$var1 = $passPost;
			echo "Mot de passe invalide _ ";
			echo $var . ' _ ';
			echo $var1;
		}
		
	}

	public function adminPanel()
	{
		$billets = $this->billet->getBillets();
		$view = new view("adminPanel");
		$view->generate(array('billets' => $billets));
	}

	public function addPassword($password)
	{
		$this->user->addPass($password);
	}

	public function view_addBillet()
	{
		$view = new view('addBillet');
		$view->generate(array());
	}

	
}