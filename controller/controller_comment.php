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
		
	}

	

	public function deleteComment($idCom)
	{
		$this->comments->deleteCom($idCom);
		header('Location: index.php');
	}
}