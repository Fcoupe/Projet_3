<?php

require_once ('Model/model.php');

class user extends model
{
	public function getPass($pass)
	{
		$sql = 'SELECT USER_PASS as userPass' . 'from T_USER WHERE USER_PASS = ?';
		$pass = $this->executeReq($sql, array($pass));
		return $pass;
	}
}