<?php $this->title = "Mon Blog";
session_start(); ?> 


<br /> <br />
<a class="btn btn-success btn-lg" href="index.php?action=adminPanel&id=1"><span class="glyphicon glyphicon-home"></span> Retour au menu d'administration</a>
	<br />
<h2>Créez vos articles en y ajoutant du style !</h2>
<br />
<form method="post" action="index.php?action=addBil">
	<input type="text" name="title" id="title" placeholder="Votre Titre ici !" required />
	<textarea id="texte" name="content" rows="30"></textarea>
	<input type="submit" value="Valider" />
</form>
<?php var_dump($_SESSION); ?>

