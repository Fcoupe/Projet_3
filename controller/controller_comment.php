<?php 		// Controlleur des fonction Comments

require_once ('model/comments.php');
require_once ('view/view.php');

class controllerComment 
{
	private $comments;
	
	public function __construct()
	{ // Instanciation de la fonction Comments
		$this->comments = new Comments();
	}

	public function addComments ($author, $content, $idBillet)
	{		// Ajout de commentaire en BDD et redirection
		$this->comments->addComment($author, $content, $idBillet);
		header('Location: index.php?action=billetAdmin&id=' . $_POST["id"]);
		
	}

	public function deleteComment($idCom, $idBillet)
	{		// Sup^pression de Commentaire et redirection
		$this->comments->deleteCom($idCom);
		header('Location: index.php?action=billetAdmin&id=' . $idBillet);
	}

	public function allCom($page)
	{		// Focntion de pagination de l'Admin Comment et création de la vue 
		$numbMax = $this->comments->numberCom();
		$comMax = 5;
		
		$numberPage = ceil(intval($numbMax['numb']) / intval($comMax));
		$firstText = ($page - 1) * intval($comMax);
		$allCom = $this->comments->allCom(intval($firstText), intval($comMax));
		$view = new view('adminCom');
		$view->generate(array('allCom' => $allCom, 'numbMax' => $numbMax, 'numberPage' => $numberPage));
	}

	public function reportCom($idCom)
	{
		// $check = $this->comments->numbReport($idCom);
		// header("Location: ")//A finir 
	}
		
}