<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet"  href="assets/css/style.css">
	<title><?= $title ?></title> <!-- Element spécifique au titre ! -->
</head>
<body>
	<div id="global">
		<header>
			<a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
			<p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
		</header>
		<div id="contenu">
			<?= $content ?> <!-- Variable renvoyant le contenu -->
		</div>
		<footer id="piedBlog">
			Blog Réaliser avec une architecture MVC.
		</footer>
	</div>  <!-- Fermeture de la div global -->
</body>
</html>