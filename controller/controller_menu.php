<?php
require_once ('view/view.php');

class controllerMenu 
{
	public function aPropos()
	{
		$view = new view("apropos");
		$view->generate(array());
	}

	public function contact()
	{
		$view = new view("contact");
		$view->generate(array());
	}

	public function administrator()
	{
		$view = new view("pass");
		$view->generate(array());
	}
}