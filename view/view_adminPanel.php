<?php $this->title = "Mon Blog"; ?>

<div class="container">
	<div class="row">
		<div id="container" class="col-sm-12 col-md-12 col-lg-12">
				<?php foreach ($billets as $billet): ?>
					<article  class="col-sm-9 col-md-9 col-lg-9">
						<header>
							
							<br />
							<a href="<?= "index.php?action=billet&id=" . htmlspecialchars($billet['id']) ?>">
							<h1 class="titreBillet"><?= htmlspecialchars($billet['title']) ?></h1>
							</a>
							<time><?= htmlspecialchars($billet['date_t']) ?></time>
							<div>
								<a href="<?= "index.php?action=updateView&id=" .  $billet['id'] ?>">Modifier</a>
							<a href="<?= "index.php?action=delete&id=" . $billet['id'] ?>">Supprimer le Billet !</a>
							</div>
							<div>
								<br />
								<img class="img-thumbnail" src="<?= htmlspecialchars($billet['img']) ?>">
							</div>
							
						</header>

						<p><br /><?= htmlspecialchars($billet['content']) ?></p>
						<hr />
					</article>

				<?php endforeach; ?>

				
		</div>
	</div>
</div>