<?php

require_once ('controller/controller_home.php');
require_once ('controller/controller_billet.php');
require_once ('view/view.php');

class router 
{
	private $ctrlHome;
	private $ctrlBillet;

	public function __construct()
	{
		$this->ctrlHome = new controllerHome();
		$this->ctrlBillet = new controllerBillet();
	}

	public function routerReq()
	{
		try
		{
			if (isset($_GET['action']))
			{
				if ($_GET['action'] == 'billet')
				{
					if (isset($_GET['id']))
					{
						$idBillet = intval($_GET['id']);

						if ($idBillet != 0)
						{
							$this->ctrlBillet->billet($idbillet);
						}
						else
              			{
              			throw new Exception("Identifiant de billet non valide");
              			}
					}
					else
					{
            		throw new Exception("Identifiant de billet non défini");
					}
				}
				else
				{
					throw new Exception("Action non valide");
				}
			}
			else // si aucune action definit alors affichage de l'accueil
			{
				$this->ctrlHome->home();
			}
		}

		catch (Exception $e)
		{
			$this->error($e->getMessage());
		}
	}// fin de function

	private function error($msgError)
	{
		$view = new view('error');
		$view->generate(array('msgError' => $msgError));
	}
}