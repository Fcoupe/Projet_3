<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title><?= $title ?></title> <!-- Element spécifique au titre ! -->
</head>
<body>
	<div id="container">
		<header>
			<a href="index.php"><h1 id="titleBlog">Mon Blog</h1></a>
			<p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
		</header>
		<div id="content">
			<?= $content ?> <!-- Variable renvoyant le contenu -->
		</div>
		<footer id="footer">
			Blog Réaliser avec une architecture MVC.
		</footer>
	</div>  <!-- Fermeture de la div container -->
</body>
</html>