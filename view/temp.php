<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet"  href="assets/css/style.css">
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<title><?= $title ?></title> <!-- Element spécifique au titre ! -->
</head>
<body>


		<!-- Navigation -->
	<!--	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
		</div>-->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.js"></script>

		<!-- Fin Navigation -->

	
	<br /><br />
	


	
	<!-- Corps de page -->
	<div id="container">
				<?= $content ?> <!-- Variable renvoyant le contenu -->	
	</div>

	
	<footer id="footer">
		<div>
			<p>Blog de présentation du nouveau livre de Mr.ForterocheJean </p><br/>
			<p><a href="index.php?action=passView">Administration</a></p>
		</div>
	</footer>
</div></body>
</html>