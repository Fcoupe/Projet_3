<?php $this->title = "Mon Blog - " . $billet['title']; ?>
 
<br /><br />
		<!-- Bouton de retour vers le Homepage d'aministration -->
<a class="btn btn-success btn-lg" href="index.php"><span class="glyphicon glyphicon-home"></span> Retour a la page d'accueil</a>
<br />
<article >
	<header class="titleBil">
		<h1><?= htmlspecialchars($billet['title']) ?></h1>		
		<time>Posté le : <?= htmlspecialchars($billet['date_t']) ?></time>
	</header>
	<div class="col-lg-12">
		<div class="col-lg-offset-1 col-lg-10">
			<p><br /><?= $billet['content'] ?></p>
			<hr class="hr" />
		</div>
	</div>
</article>

<header>
	<br /><br />
	<h2 id="answer">Commentaires : </h2>
</header>

<?php foreach ($comments as $comment): ?>
	<br />
	<div class="col-lg-12">
		<div class="col-lg-offset-1 col-lg-10">
			<header>
			<h4 class="titleCom"><?= htmlspecialchars($comment['author']) ?> dit : </h4>
			</header>
			<div class="com">
				<p><?= htmlspecialchars($comment['content']) ?></p>		
			</div>
		<a class="btn btn-warning btn-sm" href="<?= "index.php?action=report&id=" .  $comment['id'] . '&idb=' . $billet['id']; ?>">Signaler commentaire</a>
		</div>
	</div>
	<hr class="hr">

	<?php endforeach; ?>
	<div class="row" id="addCom">
			<!-- Formulaire d'ajout de commentaire -->
		<h4>Ajouter Commentaire : </h4>
		<form method="post" action="index.php?action=addComments">
		    	<input id="auteur" name="author" type="text" placeholder="Votre pseudo" required /><br />
		    	<textarea id="txtComment" name="content" rows="3" 
		              placeholder="Votre commentaire" required></textarea>
	             <br />
	    	<input type="hidden" name="id" value="<?= $billet['id'] ?>" />
	    	<input type="submit" value="Valider" />
		</form>
</div>

	