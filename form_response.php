<?php
session_start();
require('./includes/init.php');

if (isset($_SESSION['id'])) {
    ?>
    <h2>Réponse à l'annonce</h2>
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
    <form action="" method="post">
        <label for="reponse">Votre réponse</label><br>
        <textarea name="reponse" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Envoyer">
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
