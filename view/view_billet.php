<?php $this->title = "Mon Blog - " . $billet['title']; ?>
 
<?php ob_start(); ?>
	<article>
		<header>
			<h1 class="titreBillet"><?= $billet['title'] ?></h1>
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
		
	<?php endforeach; ?>
	<?php $content = ob_get_clean(); ?>

	<?php require ('view/temp.php'); ?>