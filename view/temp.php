<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet"  href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css//bootstrap.css">
	<title><?= $title ?></title> <!-- Element spécifique au titre ! -->
</head>
<body>
	<div id="container">

		<nav class="navbar navbar-Inverse">
			<div class="container-fluid">
				<div id="menu" class="row col-lg-12">
					<ul class="nav navbar-nav">
						<li  class="active"> <a href="index.php">Acceuil</a></li>
						<li > <a href="#">A propos</a></li>
						<li > <a href="#">Contact</a></li>
					</ul>
				
					<form class="navbar-form navbar-right inline-form">
						<div class="form-group">
							<input type="search" class="input-sm form-control" placeholder="Recherche">
							<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
						</div>
					</form>
				</div>
			</div>
		</nav>
		<div id="row">
			<header>
				<a class="col-lg-12" href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
				<p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
			</header>
			<div id="contenu">
				<?= $content ?> <!-- Variable renvoyant le contenu -->
			</div>
			<footer id="piedBlog">
				Blog Réaliser avec une architecture MVC.
			</footer>
		</div>
	</div>  <!-- Fermeture de la div global -->
</body>
</html>