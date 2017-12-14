<?php
session_start();
require ('./includes/init.php');

$id = $_SESSION['id'];
$req = $db->query("SELECT * FROM user WHERE id_user = $id");
$user = $req->fetch();
?>

    <!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier mon profil</title>
</head>
<body>

<p><a href="page_membre.php">Retour</a></p>

<h2>Modifier mon profil</h2>
<form enctype="multipart/form-data" action="" method="post" name="modif">

    <label for="username">Pseudo</label><br>
    <input type="text" name="username" id="username" value="<?php echo $user['username']?>" /><br>


    <label for="last_name">Nom</label><br>
    <input type="text" name="last_name" id="last_name" value="<?php echo $user['last_name']?>" /><br>

    <label for="first_name">Prénom</label><br>
    <input type="text" name="first_name" id="first_name" value="<?php echo $user['first_name']?>" /><br>

    <label for="mail">Mail</label><br>
    <input type="email" name="mail" id="mail" value="<?php echo $user['mail']?>" /><br>

    <label for="phone">Telephone</label><br>
    <input type="text" name="phone" id="phone" value="<?php echo $user['phone']?>" /><br>

    <!--<div>
        <button type="button" id="btnmodif" onclick="enable()">Modifier mon profil </button>
    </div>!-->
    <br>
        <input type="submit" value="Envoyer">

</form>
<?php
if((isset($_POST)) && (!empty($_POST['username']))&& (!empty($_POST['last_name'])) && (!empty($_POST['first_name'])) && (!empty($_POST['mail'])) && (!empty($_POST['phone']))) {
    $req = $db->prepare("UPDATE user SET username = :username, last_name = :ln, first_name = :fn, mail = :mail, phone = :phone WHERE id_user = $id");
    $req->execute([
        ':username' => $_POST['username'],
        ':ln' => $_POST['last_name'],
        ':fn' => $_POST['first_name'],
        'mail' => $_POST['mail'],
        'phone' => $_POST['phone']
    ]);
    header('Location: page_membre.php');
}

?>

<a href="modification_mdp.php">Modifier mon mot de passe ></a>

</body>
</html>

<?php

if ((isset($_POST)) && (!empty($_POST['username'])) && (!empty($_POST['last_name'])) && (!empty($_POST['first_name']))
    && (!empty($_POST['mail'])) && (!empty($_POST['mail2'])) && (!empty($_POST['password'])) && (!empty($_POST['password2']))
    && (!empty($_POST['phone'])) && (!empty($_FILES['photo'])))

    $request = $db->prepare("UPDATE INTO USER VALUES (NULL, :username, :last_name, :first_name, :mail, :password, :phone)");

?>