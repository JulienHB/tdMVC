<?php session_start();
var_dump($_SESSION);

?><h2>Bienvenue <?php echo($_SESSION['id']);?></h2> 