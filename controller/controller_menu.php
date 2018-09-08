<?php  		// Controlleur Menu
require_once ('view/view.php');

class controllerMenu 
{
	public function aPropos()
	{		// Création de la vue A propos
		$view = new view("apropos");
		$view->generate(array());
	}

	public function contact()
	{		// Création de la vue Contact
		$view = new view("contact");
		$view->generate(array());
	}

	public function administrator()
	{		// Création de la vue Administrator
		$view = new view("pass");
		$view->generate(array());
	}
}