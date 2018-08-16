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
		$comMax = 10;
		
		$this->comments->countCom();
		var_dump($result);
		$numberMaxPerPage = ceil($result / $comMax);
		for ($i = 1 ; $i <= $comMax ; $i++)
		{
    		echo '<a href="index.php?action=page=' . $i . '">' . $i . '</a> ';
		}


		$this->comments->allCom();
		$view = new view('adminCom');
		$view->generate(array());
	}
}