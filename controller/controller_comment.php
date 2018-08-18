<?php

require_once ('model/comments.php');
require_once ('view/view.php');

class controllerComment 
{
	private $comments;
	

	public function __construct()
	{
		$this->comments = new Comments();
	}

	public function addComments ($author, $content, $idBillet)
	{
		$this->comments->addComment($author, $content, $idBillet);
		header('Location: index.php?action=billetAdmin&id=' . $_POST["id"]);
		
	}

	

	public function deleteComment($idCom, $idBillet)
	{
		$this->comments->deleteCom($idCom);
		header('Location: index.php?action=billetAdmin&id=' . $idBillet);
	}

	public function allCom()
	{
		$comMax = 5;
		
		$this->comments->countCom();
		var_dump($numbMax['numb']);

		$numberMaxPerPage = ceil($numbMax / $comMax);
		for ($i = 1 ; $i <= $numberMaxPerPage ; $i++)
		{
    		echo '<a href="index.php?action=page=' . $i . '">' . $i . '</a> ';
		}


		$allCom = $this->comments->allCom();
		var_dump($allCom);
		$view = new view('adminCom');
		$view->generate(array('allCom' => $allCom));
	}
}