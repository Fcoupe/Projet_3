<?php $this->title = "Mon Blog - " . $billet['title'];
?>
 
 <br /><br />		<!-- Bouton de retour vers la Homepage d'administration -->
<a class="btn btn-success btn-lg" href="index.php?action=adminPanel&id=1"><span class="glyphicon glyphicon-home"></span> Retour au menu d'administration</a>
<br />
<article>
	<header class="titleBil">
		<h1><?= htmlspecialchars($billet['title']) ?></h1>
			
		<time><?= htmlspecialchars($billet['date_t']) ?></time>
	</header>
	<div class="col-lg-12">
		<div class="col-lg-offset-1 col-lg-10">
			<p><br /><?= $billet['content'] ?></p>
		</div>
	</div>
</article>
<hr class="hr" />
<header>
	<h2 id="answer">Réponse à <?= $billet['title'] ?></h2>
</header>
		<!-- Création de la boucle des commentaires -->
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
		</div>
	</div>
<?php endforeach; ?>
		



	