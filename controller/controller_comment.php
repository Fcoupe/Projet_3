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

	public function updateComview ($idCom)
	{
		$comments = $this->comments->getComment($idCom);
		$view = new view("updateCom");
		$view->generate(array('comments' => $comments));
	}

	public function updateCom($idCom, $author, $content)
	{
		$this->comments->updateComment($idCom, $author, $content);
	}
}