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

<article>
		<form method="post" action="index.php?action=addBil">
    <input id="auteur" name="author" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtBillet" name="content" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    
    <input type="submit" value="Valider" />


</form>
</article>
