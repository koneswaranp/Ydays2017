<?php
session_start();
require('includes/init.php');

$id = $_SESSION['id'];
$req = $db->query("SELECT * FROM user WHERE id_user = $id");
$user = $req->fetch();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Membre</title>

</head>
<body>
<div class="navbar">
    <ul>
        <li><a href="modification.php">Modifier mon profil</a></li>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="deconnexion.php">Déconnexion</a></li>
    </ul>
</div>

<h1>Bienvenue dans votre espace membre,
    <?php
    echo $user['first_name'] . ".";
    ?>
</h1>
<h3>Vos annonces</h3>
<table class="table table-striped table-hover">
    <tr>
        <td><b>Numéro de l'annonce</b></td>
        <td><b>Titre de l'annonce</b></td>
        <td><b>Deadline</b></td>
        <td><b>Description</b></td>
    </tr>
    <?php

    $req = $db->query("SELECT * FROM ad WHERE id_user = $id");
    $ads = $req->fetchAll();
    foreach ($ads as $ad) {
        ?>
        <tr>
            <td>
                <?php echo $ad['id_ad']; ?>
            </td>
            <td>
                <?php echo $ad['title']; ?>
            </td>
            <td>
                <?php
                if (isset($ad['deadline'])) {
                    echo $ad['deadline'];
                }
                ?>
            </td>
            <td>
                <?php echo $ad['description']; ?>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
<h3>Réponses à vos annonces</h3>
<table class="table table-striped table-hover">
    <tr>
        <td><b>Numéro de l'annonce</b></td>
        <td><b>Date</b></td>
        <td><b>Pseudo</b></td>
        <td><b>Description</b></td>

    </tr>
    <?php

    $req = $db->query("SELECT * FROM response WHERE id_client = $id");
    $res = $req->fetchAll();
    foreach ($res as $re) {
        $id = $re['id_dev'];
        $req = $db->query("SELECT * FROM user WHERE id_user = $id");
        $user = $req->fetch();
        ?>

        <tr>
            <td>
                <?php echo $re['id_ad']; ?>
            </td>
            <td>
                <?php
                echo $re['date_response']
                ?>
            </td>
            <td>
                <?php echo $user['username']; ?>
            </td>
            <td>
                <?php echo $re['response'] ?>
            </td>
            <td>
                <?php
                if (!$re['accepted']) {
                    $_SESSION['id_ad'] = $re['id_ad'];
                    ?>
                    <a href="form_accept.php">Répondre</a>
                    <?php
                }
                elseif($re['accepted'] == 'true'){
                    echo "Nom de votre correspondant : " . $user['first_name'] . " " . $user['last_name'];
                    echo "Numéro de téléphone : " . $user['phone'];
                    echo "Adresse mail : " . $user['mail'];
                }
                else{
                    echo "Vous avez refusé cette proposition";
                }
                ?>

            </td>
        </tr>

        <?php
    }
    ?>
</table>

<h3>Annonces auxquels vous avez répondu</h3>
<table class="table table-striped table-hover">
    <tr>
        <td><b>Numéro de l'annonce</b></td>
        <td><b>Date</b></td>
        <td><b>Pseudo</b></td>
        <td><b>Description</b></td>
        <td><b>Réponse</b></td>
    </tr>
    <?php

    $req = $db->query("SELECT * FROM response WHERE id_dev = $id");
    $res = $req->fetchAll();
    foreach ($res as $re) {
        $id = $re['id_client'];
        $req = $db->query("SELECT * FROM user WHERE id_user = $id");
        $user = $req->fetch();
        ?>

        <tr>
            <td>
                <?php echo $re['id_ad']; ?>
            </td>
            <td>
                <?php
                echo $re['date_response']
                ?>
            </td>
            <td>
                <?php echo $user['username']; ?>
            </td>
            <td>
                <?php echo $re['response'] ?>
            </td>
            <td>
                <?php
                if($re['accepted'] == 'true'){
                    echo "Offre acceptée" . "<br>";
                    echo "<b>Nom de votre correspondant : </b>" . $user['first_name'] . " " . $user['last_name'] . "<br>";
                    echo "<b>Numéro de téléphone : </b>" . $user['phone'] . "<br>";
                    echo "<b>Adresse mail :</b> " . $user['mail'];
                }
                elseif($re['accepted'] == 'false'){
                    echo "Offre refusée";
                    if($re['comments']){
                        echo $re['comments'];
                    }
                    else {
                        echo "Pas de commentaire";
                    }
                }
                else {
                    echo "Offre en attente";
                }
                ?>

            </td>
        </tr>

        <?php
    }
    ?>
</table>

</body>
</html>


