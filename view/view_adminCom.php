<?php $this->title = "Admin Comment"; 
session_start();
?> 
<br /><br />
<a class="btn btn-success btn-lg" href="index.php?action=adminPanel"><span class="glyphicon glyphicon-home"></span> Retour au menu d'administration</a>
<div class="row">
<?php foreach ($allCom as $comment): ?>
	
	<article  class="col-sm-9 col-md-9 col-lg-9">
		<header>
			<h3><?= $comment['author'] ?></h3>
		<br />
			<time><?= htmlspecialchars($comment['date_t']) ?></time>
		</header>

			<p><br /><?= $comment['content'] ?></p>
			<hr class="hr"/>
			</article>

				<?php endforeach; ?>
</div>
<div class="row">
<footer class="align-center">

<?php




for ($i = 1 ; $i <= $numberPage ; $i++)
		{
    		echo '<a class="btn btn-info btn-sm" href="index.php?action=page&id=' . $i . '">' . $i . '</a> ';
		}
?>
</footer>
</div>