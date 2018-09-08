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
				{		// Affichage de la vue d'un Billet
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
				{		// Affichage de la vue d'un billet Vers.Admin
					session_start();
					if(isset($_SESSION['nickName']))
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
				}

				else if($_GET['action'] == 'securityTest')
				{		// Fonction de test Password
					$passPost = $this->getParams($_POST, 'passPost');
					$nickName = $this->getParams($_POST, 'nickName');
					$this->ctrlUser->securityTest($passPost, $nickName);
				}

				else if ($_GET['action'] == 'addComments')
				{		// Fonction d'ajout de commentaire 
	            	$author = $this->getParams($_POST, 'author');
	            	$author = htmlspecialchars($author);
	            	$content = $this->getParams($_POST, 'content');
	            	$content = htmlspecialchars($content);
	            	$idBillet = $this->getParams($_POST, 'id');
	            	$idBillet = htmlspecialchars($idBillet);
	            	$this->ctrlComment->addComments($author, $content, $idBillet);
				}

				else if ($_GET['action'] == 'addBil')
				{		// Fonction d'ajout de Billet
					session_start();
					if($_SESSION['nickName'])
					{
						$title = $this->getParams($_POST, 'title');
						$content = $this->getParams($_POST, 'content');
						$this->ctrlBillet->addBil($title, $content);
						header('Location: index.php?action=adminPanel&id=1');
					}
					else
					{
						header('Location: index.php?action=passView');
					}
				}

				else if ($_GET['action'] == 'addPassword')
				{
					$password = $this->getParams($_POST, 'password');
					$this->ctrlUser->addPassword($password);
				}

				else if ($_GET['action'] == 'updateView')
				{		// Affiche la vue de la modification de Billet
					session_start();
					if(isset($_SESSION['nickName']))
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
					else
					{
						header('Location: index.php?action=passView');
					}
				}

				else if ($_GET['action'] == 'updateBil')
				{		// Fonction de modfication de Billet
					session_start();
					if(isset($_SESSION['nickName']))
					{
						$title = $this->getParams($_POST, 'title');
						$content = $this->getParams($_POST, 'content');
						$idBillet = $this->getParams($_POST, 'id');
						$this->ctrlBillet->UpdateBil($title, $content, $idBillet);
					}
				}
	
				else if ($_GET['action'] == 'delete')
				{		// Fonction de suppression de Billet/Article
					session_start();
					if(isset($_SESSION['nickName']))
					{
						$idBillet = $this->getParams($_GET, 'id');
						$this->ctrlBillet->delete($idBillet);
					}
					else
					{
						header('Location: index.php?action=passView');
					}
				}

				else if ($_GET['action'] == 'deleteComment')
				{		// Fonction de suppression des coms
					session_start();
					if (isset($_SESSION['nickName']))
					{
						$idCom = $this->getParams($_GET, 'id');
						$idBillet = $this->getParams($_GET, 'idp');
						$this->ctrlComment->deleteComment($idCom, $idBillet);
					}
					else
					{
						header('Location: index.php?action=passView');
					}
				}

				else if ($_GET['action'] == 'apropos')
				{		//Affiche la pag A propos
					$this->ctrlMenu->aPropos();
				}

				else if ($_GET['action'] == 'contact')
				{		// Affiche la page contact
					$this->ctrlMenu->contact();

				}

				else if ($_GET['action'] == 'passView')
				{		// Affiche la vue de connection
					$this->ctrlMenu->administrator();
					
				}

				else if ($_GET['action'] == 'destroy')
				{		// Détruit la session
					session_start();
					if(isset($_SESSION['nickName']))
					{
						$this->ctrlUser->destroy();
					}
					else
					{
						header('Location: index.php?action=passView');
					}	
				}

				else if ($_GET['action'] == 'adminPanel')
				{		// Affiche la Homepage d'aministration
					session_start();
					if(isset($_SESSION['nickName']))
					{
						if(isset($_GET['id']))
						{
							$page = $this->getParams($_GET, 'id');
						}

						else
						{
							$page = 1;
						}
						$this->ctrlUser->adminPanel($page);
					}

					else 
					{
						header('Location: index.php?action=passView');
					}
				}

				else if ($_GET['action'] == 'view_addBillet')
				{		// Affiche la vue de création des billets
					session_start();
					if(isset($_SESSION['nickName']))
					{
						$this->ctrlUser->view_addBillet();
					}
					else
					{
						header('Location: index.php?action=passView');
					}
				}

				else if($_GET['action'] == 'page')
				{		// Pagination Gestion des Coms
					if(isset($_GET['id']))
					{
						$page = $this->getParams($_GET, 'id');
					}

					else
					{
						$page = 1;
					}
					$this->ctrlComment->allCom($page);
					
				}

				else if($_GET['action'] == 'home')
				{		// Affiche la page d'accueil
					if(isset($_GET['id']))
					{
						$page = $_GET['id'];
					}

					else
					{
						$page = 1;
					}
					$this->ctrlHome->home($page);
				}

			}

			else // si aucune action definit alors affichage de l'accueil
			{	$page = 1;
				$this->ctrlHome->home($page);
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