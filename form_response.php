<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/header.css">
    <title>Réponse annonce</title>
</head>
<body>
<?php require('includes/header.php');


if (isset($_SESSION['id'])) {
    ?>
<div class="row">
<div class="form col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">

    <h3>Répondre à l'annonce :</h3>
    <?php
    $id = $_SESSION['id_ad'];
    $req = $db->query("SELECT * FROM ad WHERE id_ad = $id");
    $ad = $req->fetch();
    ?>
    <h4>Titre de l'annonce :
        <?php
        echo $ad['title'];
        ?>
    </h4>
    <h5>
        Date limite :

        <?php
        echo $ad['ad_date'];
        ?>
    </h5>
    <p>
        <b>Description :</b>

        <?php
        echo $ad['description'];
        ?>
    </p>
    <HR size=2 align=center width="100%">
    <form action="" method="post" class="rep_ad">
        <label for="reponse">Votre réponse</label><br>
        <textarea name="reponse" id="" cols="30" rows="10"></textarea><br>
        <br>
        <input type="submit" value="Envoyer" class="btn">
    </form>
<?php
    if((isset($_POST)) && (!empty($_POST['reponse']))) {
        $req = $db->prepare("INSERT INTO response (date_response, response, id_client, id_dev, id_ad) VALUES (NOW(), :response, :id_client, :id_dev, :id_ad)");
        $req->execute([
           ':response' => $_POST['reponse'],
            ':id_client' => $_SESSION['id_client'],
            ':id_dev' => $_SESSION['id'],
            ':id_ad' => $id
        ]);
    }
} else {
    header('Location: connexion.php');
}
?>
</div>
</div>

<?php
require('includes/footer.html');

?>
