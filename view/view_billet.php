<?php $this->title = "Mon Blog - " . $billet['title']; ?>
 

	<article>
		<header>
			<h1 class="titreBillet"><?= $billet['title'] ?></h1>
			<a href="<?= "index.php?action=updateView&id=" .  $billet['id'] ?>">Modifier</a>
			<a href="<?= "index.php?action=delete&id=" . $billet['id'] ?>">Supprimer le Billet !</a>
			<time><?= $billet['date_t'] ?></time>
		</header>
		<p><?= $billet['content'] ?></p>
	</article>
	<hr />
	<header>
		<h1 id="titreReponses">Réponse à <?= $billet['title'] ?></h1>
	</header>
	<?php foreach ($comments as $comment): ?>
		
		<p><?= $comment['author'] ?> dit :</p>
		<p><?= $comment['content'] ?></p>
		<a href="<?="index.php?action=updateComView&id=" . $comment['id']?>">Modifier Commentaire !</a>
		
	<?php endforeach; ?>

	<form method="post" action="index.php?action=addComments">

    	<input id="auteur" name="author" type="text" placeholder="Votre pseudo" required /><br />
    	<textarea id="txtCommentaire" name="content" rows="5" 
              placeholder="Votre commentaire" required></textarea><br />
    	<input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    	<input type="submit" value="Valider" />

	</form>
	