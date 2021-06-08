<?php include 'controller/testForm.php';
 if(!empty($_SESSION['id'])):
    header('location: welcome.php');
 endif;  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identification</title>
</head>
<body>
    <?php
        if(!empty($msg)):
    ?>
        <p><?php echo $msg; ?></p>
    <?php
    endif;


    if(!empty($error) || $error):
    ?>
    <form action="index.php" method="POST">
        <p>
            <label for="email">Votre email</label>
            <input type="email" id="email" name="email"/>
        </p>
        <p>
            <label for="password">Votre mot de passe</label>
            <input type="password" id="password" name="password"/>
        </p>
        <p>
            <input type="submit" value="connexion"/>
        </p>
    </form>
    <?php
    endif;
    ?>
</body>
</html>
