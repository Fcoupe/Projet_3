<?php

  // Accées au données
require ('controller/controller.php');

try
{
	if(isset($_GET['action']))
	{
		if($_GET['action'] == 'billet')
		{
			if(isset($_GET['id']))
			{
				$idBillet = intval($_GET['id']);

				if($idBillet != 0)
				{
					billet($idBillet);
				}

				else
				{
				throw new Exception("Identifiant de billet non valide");
				}

			}

			else
			{
			throw new Exception("Identifiant du billet non défini");
			
			}
		}

		else
		{
			throw new Exception("Action non valide");
			
		}
	}

	else
	{
		home(); //Action par defaut
	}
}

catch (Exception $e)
{
	error($e->getMessage());
}


 
