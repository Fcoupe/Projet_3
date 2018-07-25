<?php
  // Accées au données
require ('model/model.php');

$billets = getBillets();

// Affichage

require('view/view_index.php'); 
