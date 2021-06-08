<?php include 'controller/testForm.php';?>
<h2>Création de compte</h2>
<form action="index.php" method="post">
    <p>
        <label for="firstName">Prenom</label>
        <input type="firstName" id="firstName" name="firstName"/>
    </p>
    <p>
        <label for="lastName">Nom</label>
        <input type="lastName" id="lastName" name="lastName"/>
    </p>
    <p>
        <label for="email">Email</label>
        <input type="email" id="email" name="email"/>
    </p>
    
    <p>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password"/>
    </p>
    <p>
        <input type="submit" name="send" value="Envoyer"/>
    </p>
</form>