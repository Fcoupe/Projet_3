<?php $this->title = "Mon Blog"; 
?>		<!-- Home page avec les options Administration -->
<div class="container">
	<div class="row">
		<div id="container" class="col-sm-12 col-md-12 col-lg-12">
			<br />
			<!-- Bouton dajout et de gestion des articles -->
			<a class="btn btn-primary btn-lg" href="index.php?action=view_addBillet">Ajout d'article</a>
			<a class="btn btn-warning btn-lg" href="index.php?action=page">Gestion des commentaires</a>
			<!-- Début de la boucle de création des articles -->
			<?php foreach ($billets as $billet): ?>
			<article  class="col-sm-11 col-md-11 col-lg-11">
				<header>			
					<br />
					<a href="<?= "index.php?action=billetAdmin&id=" . htmlspecialchars($billet['id']) ?>">
					<h1 class="title"><?= htmlspecialchars($billet['title']) ?></h1>
					</a>
					<time><?= htmlspecialchars($billet['date_t']) ?>
					</time>
					<a class="btn btn-warning btn-xs" href="<?= "index.php?action=updateView&id=" .  $billet['id'] ?>">Modifier l'article</a>
					<a class="btn btn-danger btn-xs" href="<?= "index.php?action=delete&id=" . $billet['id'] ?>">Supprimer l'article</a>
							
					<div>
						<br />
						<img src="<?= htmlspecialchars($billet['img']) ?>">
					</div>
							
				</header>

					<p><br /><?= $billet['content'] ?></p>
					<hr class="hr" />
			</article>
		</div>
			<?php endforeach; ?>		<!-- Fin de la de boucle de création des articles -->
			<?php  		// Pagination 
				for ($i = 1 ; $i <= $numberPage ; $i++)
					{
    					echo '<a class="btn btn-info btn-sm" href="index.php?action=adminPanel&id=' . $i . '">' . $i . '</a> ';
					}
					echo '<br />';
					?>
					<!-- Bouton de déconnexion session -->
		<a class="btn btn-danger btn-lg" href="index.php?action=destroy">Déconnexion</a>
					<!-- Bouton d'ajout d'article  -->
		<a class="btn btn-primary btn-lg" href="index.php?action=view_addBillet">Ajout d'article</a>
					<!-- Bouton de gestion des commentaires -->
		<a class="btn btn-warning btn-lg" href="index.php?action=page">
		Gestion des commentaires</a>
	</div>
</div>
