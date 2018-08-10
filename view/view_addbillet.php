<?php $this->title = "Mon Blog"; ?> 


<br /> <br />
<h2>Crée Vos article en y ajoutant du style !</h2>
<br />
<form method="post" action="index.php?action=addBil">
	<input type="text" name="title" id="title" placeholder="Votre Titre ici !" required />
	<textarea id="texte" name="content" rows="30"></textarea>
	<input type="submit" value="Valider" />
</form>