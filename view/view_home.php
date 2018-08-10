<?php $this->title = "Mon Blog"; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">		<!--  Indicateurs -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
		</ol>
		<!-- Photo -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="assets/images/Alaska_01.jpg" alt="Paysage_Alaska">
				<div class="carousel-caption">
					<h3>Billet simple pour l'Alaska</h3>
				</div>
			</div>
			<div class="item">
				<img src="assets/images/train_02.jpg" alt="Train_Alaska">
				<div class="carousel-caption">
					<h3>Chap.1 Achete Ton Billet !</h3>
				</div>
			</div>
		</div> <!--fin photo -->
		<!-- Controles changer image -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>

<div class="container">
	<div class="row">
		<form method="post" action="index.php?action=addPassword">
			<input type="password" name="password">
			<input type="submit" values="Valider">
		</form>
		<div id="container" class="col-sm-12 col-md-12 col-lg-12">
				<?php foreach ($billets as $billet): ?>
					<article  class="col-sm-9 col-md-9 col-lg-9">
						<header">
							<br />
							<a href="<?= "index.php?action=billet&id=" . htmlspecialchars($billet['id']) ?>">
							<h1 class="titreBillet"><?= htmlspecialchars($billet['title']) ?></h1>
							</a>
							<time><?= htmlspecialchars($billet['date_t']) ?></time>
							<div>
								<br />
								<img class="img-thumbnail" src="<?= htmlspecialchars($billet['img']) ?>">
							</div>
						</header>

						<p><br /><?= $billet['content'] ?></p>
						<hr />
					</article>

				<?php endforeach; ?>

				<div id="latestPost" class="hidden-xs col-sm-3 col-md-3 col-lg-3">
					<ul id="listRight">
						<li><a href="index.php?action=billet&id=1">Billet simple pour l'Alaska</a></li>
						<li><a href="index.php?action=billet&id=2">Chap.1 Achete ton billet</a></li>
					</ul>
				</div>
		</div>
	</div>
</div>
