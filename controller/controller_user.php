<?php  		// Controlleur des fonctions User

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
	{		// Instanciation des fonctions
		$this->billet = new Billet();
		$this->comments = new Comments();
		$this->user = new User();
	}

	public function securityTest($passPost, $nickName)
	{		// Test des Mdp reçut et les compare avec la BDD
		$pass = $this->user->getPass();
		$passPost = hash('sha512', $passPost);
		if (isset($passPost) AND isset($pass) AND $passPost == $pass)
		{
			session_start(); 		// Création de la session administrateur
			$_SESSION['nickName'] = $nickName;
			$_SESSION['pass'] = $pass;
			header('Location:index.php?action=adminPanel');
			
		}
		else
		{
			echo "Mot de passe invalide _ <br />";
		}	
	}

	public function adminPanel($page)
	{		// Récupére les données billet, fonction de pagination et création de la vue 
		$bilMax = $this->billet->numBil();
		$bilLimite = 3;
		$numberPage = ceil(intval($bilMax['numBil']) / $bilLimite);
		$first = (intval($page) - 1 ) * intval($bilLimite);

		$billets = $this->billet->getBillets(intval($first), intval($bilLimite));
		$view = new view("adminPanel");
		$view->generate(array('billets' => $billets, 'first' => $first, 'numberPage' => $numberPage));
	}

	public function addPassword($password)
	{		// Fonction Bonus ajout de mot de passe (si besoin)
		$password = hash('sha512', $_POST['password']);
		$this->user->addPass($password);
		header('Location: index.php');
	}

	public function view_addBillet()
	{		// Création de la vue d'ajout de Billet
		$view = new view('addBillet');
		$view->generate(array());
	}

	public function destroy()
	{		// Destruction de session
		session_start();
		session_destroy();
		header('Location: index.php');
	}
}