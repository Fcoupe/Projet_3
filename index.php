<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<?php

  // Accées au données
require ('model/model.php');

try
{

  $billets = getBillets();
  require('view/view_index.php');// Affichage
}
catch (Exception $e)
{
  $msgError = $e->getMessage();
  require('view_error.php');
}


 
