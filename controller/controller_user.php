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
		$passPost = hash('sha512', $passPost);
		
		if (isset($passPost) AND isset($pass) AND $passPost == $pass)
		{
			session_start();
			$_SESSION['pass'] = $pass['pass'];
			header('Location:index.php?action=adminPanel');
			echo "Vous etes connecter !";
		}

		else
		{
			echo "Mot de passe invalide _ <br />";
		}	
	}

	public function adminPanel()
	{	
		$this->ctrlComment->allCom($page);
		$billets = $this->billet->getBillets();
		$view = new view("adminPanel");
		$view->generate(array('billets' => $billets));
	}

	public function addPassword($password)
	{	$password = hash('sha512', $_POST['password']);
		$this->user->addPass($password);
		header('Location: index.php');
	}

	public function view_addBillet()
	{
		$view = new view('addBillet');
		$view->generate(array());
	}

	
}