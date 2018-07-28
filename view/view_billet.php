<?php $this->title = "Mon Blog - " . $billet['title']; ?>
 

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
	