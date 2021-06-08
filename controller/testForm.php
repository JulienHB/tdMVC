<?php
session_start();

$error = true;
if(!empty($_POST)):
    if(!empty($_POST['email']) AND !empty($_POST['password'])):
        $_SESSION['id']=$_POST['email'];
        $error = false;
        $msg = 'Bravo vous êtes connecté.';
    else:
        $error = true;
        $msg = 'Adresse email ou mot de passe incorrect.';
    endif;
endif;