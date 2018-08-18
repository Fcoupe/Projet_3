<?php $this->title = "Admin Comment"; ?> 
<br /><br />
<div>
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

<footer>
<?php
$comMax = 5;
$numberPage = ceil(intval($numbMax['numb']) / intval($comMax));
for ($i = 1 ; $i <= $numberPage ; $i++)
		{
    		echo '<a href="index.php?action=page=' . $i . '">' . $i . '</a> ';
		}
?>
</footer>