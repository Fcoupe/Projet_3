<?php $this->title = "Mon Blog - " . $billet['title']; ?>
 
<br /><br />
		<!-- Bouton de retour vers le Homepage d'aministration -->
<a class="btn btn-success btn-lg" href="index.php?action=adminPanel"><span class="glyphicon glyphicon-home"></span> Retour au menu d'administration</a>
<br />
<article>
	<header>
		<h1 class="titreBillet"><?= htmlspecialchars($billet['title']) ?></h1>		
		<time><?= htmlspecialchars($billet['date_t']) ?>
		</time>
		<div>
			<br />
			<img class="img-thumbnail" src="<?= htmlspecialchars($billet['img']) ?>">
		</div>
	</header>
	<div class="col-lg-12">
		<div class="col-lg-offset-1 col-lg-10">
			<p><br /><?= $billet['content'] ?></p>
		</div>
	</div>
</article>
<hr class="hr" />
<header>
	<h1 id="titreReponses">Réponse à <?= $billet['title'] ?></h1>
</header>

<?php foreach ($comments as $comment): ?>
	<p><?= htmlspecialchars($comment['author']) ?> dit :</p>
	<p><?= htmlspecialchars($comment['content']) ?></p>	
<?php endforeach; ?>
		<!-- Formulaire d'ajout de commentaire -->
<form method="post" action="index.php?action=addComments">
    <input id="auteur" name="author" type="text" placeholder="Votre pseudo" required /><br />
    <textarea id="txtcommentaire" name="content" rows="3" 
              placeholder="Votre commentaire" required></textarea>
              <br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input type="submit" value="Valider" />
</form>


	