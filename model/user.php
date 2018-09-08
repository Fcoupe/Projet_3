<?php  		//Model des rêquêtes User

require_once ('model/model.php');

class User extends model
{

	public function getPass()
	{ 		// Récupere et renvoie un mot de passe 
		$sql = 'SELECT USER_PASS as pass'
		. ' FROM T_USER WHERE USER_ID = 13';
		$pass = $this->executeReq($sql);
		
		$res = $pass->fetch();
		$var = $res['pass'];
		return $var;
		
	}

	public function addPass($password)
	{		// Fonction bonus (Ajout  de mot de passe)
		$sql ='INSERT INTO T_USER(USER_PASS)'
		. 'VALUES(?)';
		$password = $this->executeReq($sql, array($password));
	}

}


