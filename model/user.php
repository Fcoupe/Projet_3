<?php

require_once ('model.php');

class User extends model
{

	public function getPass()
	{
		$sql = 'SELECT USER_PASS as pass' . ' FROM t_user WHERE USER_ID = "1"';
		$pass = $this->executeReq($sql);

		return $pass;

		echo $pass;
	}
}