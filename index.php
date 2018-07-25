<?php
  // Accées au données

        $bdd = new PDO('mysql:host=localhost;dbname=Blog;charset=utf8', 
          'root', '');
        $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
          . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
          . ' order by BIL_ID desc');
        

// Affichage

require('view/view_index.php'); 
?>