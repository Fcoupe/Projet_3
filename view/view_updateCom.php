<?php $this->title = "Mon Blog"; ?>

<form method="post" action="<?= "index.php?action=updateCom&id=" . $comments['id'] ?>">
    <input id="auteur" name="author" type="text" value="<?= $comments['author'] ?>"  required /><br />
    <textarea id="txtCommentaire" name="content" rows="4" 
              placeholder="Votre commentaire" required><?= $comments['content'] ?></textarea><br />
    <input type="hidden" name="idCom" value="<?= $comments['id'] ?>" />
    <input type="submit" value="Valider" />
</form>*