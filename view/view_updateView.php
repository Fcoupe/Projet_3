<?php $this->title = "Mon Blog"; ?>

<br /><br />

<h1>Modifier vos articles d'ici !!</h1>
<br />
<form method="post" action="<?= "index.php?action=updateBil&id=" . $billet['id'] ?>">
    <input id="auteur" name="title" type="text" value="<?= $billet['title'] ?>"  required /><br />
    <textarea id="texte" name="content" rows="30" 
              placeholder="Votre commentaire" required><?= $billet['content'] ?></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input class="btn btn-primary btn-lg" type="submit" value="Valider" />
</form>*