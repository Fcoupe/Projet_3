<?php $title = "Mon Blog"; ?>

<?php ob_start() ?>
<?php foreach ($billets as $billet): ?>
	<article>
		<header>
			<h1 class="titleBillet"><?= $billet['title'] ?></h1>
			<time><?= $billet['date'] ?></time>
		</header>
		<p><?= $billet['content'] ?></p>
	</article>
	<hr />
<?php endforeach; ?>
<?php $content = ob_get_clean(); ?>
<?php require ('view/temp.php') ?>