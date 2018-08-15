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
}