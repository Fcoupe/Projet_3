<?php $this->title = "Mon Blog - " . $billet['title']; ?>
 

	<article>
		<header>
			<h1 class="titreBillet"><?= htmlspecialchars($billet['title']) ?></h1>
			
			<time><?= htmlspecialchars($billet['date_t']) ?></time>
			<div>
				<br />
				<img class="img-thumbnail" src="<?= htmlspecialchars($billet['img']) ?>">
			</div>
		</header>
		<div class="col-lg-12">
			<div class="col-lg-offset-1 col-lg-10">
				<p><br /><?= htmlspecialchars($billet['content']) ?></p>
			</div>
		</div>
	</article>
	<hr />
	<header>
		<h1 id="titreReponses">Réponse à <?= $billet['title'] ?></h1>
	</header>
	<?php foreach ($comments as $comment): ?>
		<a href="<?= "index.php?action=deleteComment&id=" . htmlspecialchars($comment['id'])?>">Supprimer le commentaires</a>

		<p><?= htmlspecialchars($comment['author']) ?> dit :</p>
		<p><?= htmlspecialchars($comment['content']) ?></p>
		
		
		
	<?php endforeach; ?>

	<form method="post" action="index.php?action=addComments">

    	<input id="auteur" name="author" type="text" placeholder="Votre pseudo" required /><br />

    	<textarea id="txtcommentaire" name="content" rows="3" col="10" 
              placeholder="Votre commentaire" required></textarea><br />
    	<input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    	<input type="submit" value="Valider" />

	</form>


	