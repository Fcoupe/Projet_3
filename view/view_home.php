<?php $this->title = "Mon Blog"; ?>


<?php foreach ($billets as $billet): ?>
	<article>
		<header>
			<a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
			<h1 class="titreBillet"><?= $billet['title'] ?></h1>
			</a>
			<time><?= $billet['date_t'] ?></time>
		</header>
		<p><?= $billet['content'] ?></p>
	</article>
	<hr />
<?php endforeach; ?>
