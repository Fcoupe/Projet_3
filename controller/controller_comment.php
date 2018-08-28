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

	public function allCom($page)
	{
		$numbMax = $this->comments->numberCom();
		$comMax = 5;
		
		$numberPage = ceil(intval($numbMax['numb']) / intval($comMax));
		$firstText = ($page - 1) * intval($comMax);
		$allCom = $this->comments->allCom(intval($firstText), intval($comMax));
		$view = new view('adminCom');
		$view->generate(array('allCom' => $allCom, 'numbMax' => $numbMax, 'numberPage' => $numberPage));
	}
		
}