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

				else if($_GET['action'] == 'securityTest')
				{
					
					
					$passPost = password_hash($_POST['passPost'], PASSWORD_DEFAULT);
					$this->ctrlUser->securityTest($passPost);
				}

				else if ($_GET['action'] == 'addComments')
				{
	            	$author = $this->getParams($_POST, 'author');
	            	$content = $this->getParams($_POST, 'content');
	            	$idBillet = $this->getParams($_POST, 'id');
	            	$this->ctrlComment->addComments($author, $content, $idBillet);
				}

				else if ($_GET['action'] == 'addBil')
				{
					$author = $this->getParams($_POST, 'author');
					$content = $this->getParams($_POST, 'content');
					$this->ctrlBillet->addBil($author, $content);
				}

				else if ($_GET['action'] == 'addPassword')
				{
					
					
					$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
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
					$this->ctrlComment->deleteComment($idCom);
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