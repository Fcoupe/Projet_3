<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet"  href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css//bootstrap.css">
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	<title><?= $title ?></title> <!-- Element spécifique au titre ! -->
</head>
<body>


		<!-- Navigation -->
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div id="menu" class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Accueil</a>					
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="hidden"><a href="index.php"></a></li>
						<li><a href="index.php?action=apropos">À Propos</a></li>
						<li><a href="index.php?action=contact">Contact</a></li>
					</ul>
				</div>
			</div>	
		</div>
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.js"></script>

		<!-- Fin Navigation -->

	</header>
	<br /><br />
	
<div id="container">

	<header>
	<!-- Corps de page -->
	<div id="contenu">
				<?= $content ?> <!-- Variable renvoyant le contenu -->
	</div>
	<footer id="piedBlog">
				Blog Réaliser avec une architecture MVC.
	</footer>
</div></body>
</html>