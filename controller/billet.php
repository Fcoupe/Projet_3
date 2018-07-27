<?php 

require ('model/model.php');

try
{
	if (isset($_GET['id']))
	{// intval renvoie la valeur numérique du paramètre ou 0 en cas d'echec
		$id = intval($_GET['id']);

		if ($id != 0)
		{
			$billet = getBillet($id);
			$commentaires = getCommentaires($id);
			require ('view/view_billet.php');
		}

		else
		{
			throw new Exception("Identifiant de Billet incorrect");
		}
	}

	else
	{
		throw new Exception("Aucun identifiant de billet");
	}
}
catch (Exception $e)
{
	$msgError = $e->getMessage();
	require ('view/view_error.php');
}