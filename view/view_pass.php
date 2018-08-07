<?php $this->title = 'Mon BLog' ?>

<br /><br />
        <p>Veuillez entrer le mot de passe pour accéder a la page d'administration</p>
        <form action="index.php?action=securityTest" method="post">
            <p>
            	
	            <input type="password" name="passPost" />
	            <input type="submit" value="Valider" />
            </p>
        </form>
        