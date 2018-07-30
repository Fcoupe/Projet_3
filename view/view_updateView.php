<?php $this->title = "Mon Blog"; ?>

<form method="post" action="<?= "index.php?action=updateBil&id=" . $billet['id'] ?>">
    <input id="auteur" name="title" type="text" value="<?= $billet['title'] ?>"  required /><br />
    <textarea id="txtCommentaire" name="content" rows="4" 
              placeholder="Votre commentaire" required><?= $billet['content'] ?></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input type="submit" value="Valider" />
</form>*