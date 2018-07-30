<?php $this->title = "Mon Blog"; ?>


<?php foreach ($billets as $billet): ?>
	<article>
		<header>
			<a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
			<h1 class="titreBillet"><?= $billet['title'] ?></h1>
			</a>
			<time><?= $billet['date_t'] ?></time>
			
		</header>
		<p><?= $billet['content'] ?></p>
		<a href="view/view_addBil.php">Ajouter Article()Temporaire</a>

		
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
