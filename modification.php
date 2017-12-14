<?php
require ('./includes/init.php');
?>

    <!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier mon profil</title>
</head>
<body>

<p><a href="">Retour au menu</a></p>

<h2>Modifier mon profil</h2>
<form enctype="multipart/form-data" action="" method="post">

    <label for="username">Nouveau Pseudo</label><br>
    <input type="text" name="username" id="username" /><br />
    <?php if(isset($_POST['username'])){echo $_POST['username'];} ?>

    <label for="last_name">Nouveau Nom</label><br>
    <input type="text" name="last_name" id="last_name" /><br />
    <?php if(isset($_POST['last_name'])){echo $_POST['last_name'];} ?>

    <label for="mail">Nouveau adresse mail </label><br>
    <input type="email" name="mail" id="mail" /><br />
    <?php if(isset($_POST['mail'])){echo $_POST['mail'];} ?>


    <label for="password">Nouveau mot de Passe </label><br >
    <input type="password" name="password" id="password" /><br />
    <label for="confirm">Confirmer le mot de passe :</label><br >
    <input type="password" name="confirm" id="confirm"  /><br />

    <label for="phone">Nouveau Telephone</label><br>
    <input type="text" name="phone" id="phone" /><br />
    <?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>

    <br>

    <button type="button">Modifier mon profil </button>
    <br>

    <p><a href="page_membre.php">Confirmer</a></p>

</body>
</html>

<?php

if ((isset($_POST)) && (!empty($_POST['username'])) && (!empty($_POST['last_name'])) && (!empty($_POST['first_name']))
    && (!empty($_POST['mail'])) && (!empty($_POST['mail2'])) && (!empty($_POST['password'])) && (!empty($_POST['password2']))
    && (!empty($_POST['phone'])) && (!empty($_FILES['photo'])))

    $request = $db->prepare("UPDATE INTO USER VALUES (NULL, :username, :last_name, :first_name, :mail, :password, :phone)");

?>