<?php $this->title = "Mon Blog";
?> 

<br /> <br />
<a class="btn btn-success btn-lg" href="index.php?action=adminPanel"><span class="glyphicon glyphicon-home"></span> Retour au menu d'administration</a> <!-- Bouton retour au menu admin -->

	<br />
<h2>Créez vos articles en y ajoutant du style !</h2>

<br /> <!-- Formulaire d'ajout de commentaires TinyMCE -->
<form method="post" action="index.php?action=addBil">

	<input type="text" name="title" id="title" placeholder="Votre Titre ici !" required />
	<textarea id="text" name="content" rows="30"></textarea>
	<input type="submit" value="Valider" />

</form>


