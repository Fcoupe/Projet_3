<?php

require_once ('model/model.php');

class User extends model
{

	public function getPass()
	{
		$sql = 'SELECT USER_PASS as pass'
		. ' FROM T_USER WHERE USER_ID = 1';
		$pass = $this->executeReq($sql);
		
		$res = $pass->fetch();
		$var = $res['pass'];
		return $var;
		
	}

}


