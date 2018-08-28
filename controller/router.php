<?php

require_once ('controller/controller_home.php');
require_once ('controller/controller_billet.php');
require_once ('controller/controller_Comment.php');
require_once ('controller/controller_user.php');
require_once ('controller/controller_menu.php');
require_once ('view/view.php');

class router 
{
	private $ctrlHome;
	private $ctrlBillet;
	private $ctrlComment;
	private $ctrlUser;
	private $ctrlMenu;

	public function __construct()
	{
		$this->ctrlHome = new controllerHome();
		$this->ctrlBillet = new controllerBillet();
		$this->ctrlComment = new controllerComment();
		$this->ctrlUser = new controllerUser();
		$this->ctrlMenu = new controllerMenu();
	}

	public function routerReq()
	{
		try
		{
			if (isset($_GET['action']))
			{
				if ($_GET['action'] == 'billet')
				{
					$idBillet = intval($this->getParams($_GET, 'id'));

					if ($idBillet != 0)
					{
						$this->ctrlBillet->billet($idBillet);
					}
					else
              		{
              			throw new Exception("Identifiant de billet non valide");
              		}
				}

				else if($_GET['action'] == 'billetAdmin')
				{
					$idBillet = intval($this->getParams($_GET, 'id'));

					if ($idBillet != 0)
					{
						$this->ctrlBillet->billetAdmin($idBillet);
					}
					else
              		{
              			throw new Exception("Identifiant de billet non valide");
              		}
				}

				else if($_GET['action'] == 'securityTest')
				{
					
					
					$passPost = $this->getParams($_POST, 'passPost');
					$this->ctrlUser->securityTest($passPost);
				}

				else if ($_GET['action'] == 'addComments')
				{
	            	$author = $this->getParams($_POST, 'author');
	            	$author = htmlspecialchars($author);
	            	$content = $this->getParams($_POST, 'content');
	            	$content = htmlspecialchars($content);
	            	$idBillet = $this->getParams($_POST, 'id');
	            	$idBillet = htmlspecialchars($idBillet);
	            	$this->ctrlComment->addComments($author, $content, $idBillet);
				}

				else if ($_GET['action'] == 'addBil')
				{
					$title = $this->getParams($_POST, 'title');
					$content = $this->getParams($_POST, 'content');
					$this->ctrlBillet->addBil($title, $content);
				}

				else if ($_GET['action'] == 'addPassword')
				{
					
					
					$password = $this->getParams($_POST, 'password');
					$this->ctrlUser->addPassword($password);
				}

				else if ($_GET['action'] == 'updateView')
				{
					$idBillet = intval($this->getParams($_GET, 'id'));

					if ($idBillet != 0)
					{
						$this->ctrlBillet->updateView($idBillet);
					}
					else
              		{
              			throw new Exception("Identifiant de billet non valide");
              		
					}
				}

				

				else if ($_GET['action'] == 'updateBil')
				{
					$title = $this->getParams($_POST, 'title');
					$content = $this->getParams($_POST, 'content');
					$idBillet = $this->getParams($_POST, 'id');
					$this->ctrlBillet->UpdateBil($title, $content, $idBillet);
				}


					
				else if ($_GET['action'] == 'delete')
				{
					$idBillet = $this->getParams($_GET, 'id');
					$this->ctrlBillet->delete($idBillet);
				}

				else if ($_GET['action'] == 'deleteComment')
				{
					$idCom = $this->getParams($_GET, 'id');
					$idBillet = $this->getParams($_GET, 'idp');
					$this->ctrlComment->deleteComment($idCom, $idBillet);
				}

				else if ($_GET['action'] == 'apropos')
				{
					$this->ctrlMenu->aPropos();
				}

				else if ($_GET['action'] == 'contact')
				{
					$this->ctrlMenu->contact();
				}

				else if ($_GET['action'] == 'passView')
				{
					$this->ctrlMenu->administrator();
				}

				else if ($_GET['action'] == 'adminPanel')
				{
					$this->ctrlUser->adminPanel();
				}

				else if ($_GET['action'] == 'view_addBillet')
				{
					$this->ctrlUser->view_addBillet();
				}

				else if($_GET['action'] == 'page')
				{
					if($_GET['action'] == 'page')
					{
					$page = $this->getParams($_GET, 'id');
					$this->ctrlComment->allCom($page);
					}

					else
					{
						$page = 1;
						$this->ctrlComment->allCom($page);
					}
					
				}

				else if($_GET['action'] == 'home')
				{
					if($_GET['action'] == 'home')
					{
					$page = $this->getParams($_GET, 'id');
					$this->ctrlHome->home($page);
					}

					else
					{
						$page = 1;
						$this->ctrlHome->home($page);
					}
				}

			}

			else // si aucune action definit alors affichage de l'accueil
			{
				$this->ctrlHome->home();
			}
		}// fin de try

		catch (Exception $e)
		{
			$this->error($e->getMessage());
		}
	}// fin de function

	private function getParams($table, $name)
	{
		if (isset($table[$name]))
		{
			return $table[$name];
		}

		else
		{
			throw new Exception("Paramètre '$name' absent" );
			
		}
	}

	private function error($msgError)
	{
		$view = new view('error');
		$view->generate(array('msgError' => $msgError));
	}
}