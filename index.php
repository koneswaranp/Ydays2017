<?php
session_start();
require('includes/init.php');

if(isset($_SESSION['id'])) {

    ?>
    <!doctype html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
        <script
                src="https://code.jquery.com/jquery-3.1.1.min.js"
                integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
                crossorigin="anonymous"></script>
        <script src="semantic/dist/semantic.min.js"></script>
    </head>
    <body>
    <div class="row">
        <div class="tweets col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
    <h2>Publier une annonce</h2>
    <form action="" method="post">
        <label for="title">Titre de l'annonce</label><br>
        <input type="text" name="title" id="title" value="<?php if(isset($_POST['title'])){echo $_POST['title'];} ?>"><br><br>
        <label for="deadline">Date de fin</label><br>
        <input type="date" name="deadline" id="deadline" value=""><br><br>
        <label for="description">Description de l'annonce</label><br>
        <textarea name="description" id="description" cols="70" rows="20"></textarea><br><br>
        <input type="submit" content="S'inscrire">
    </form>

    <?php
    if((isset($_POST)) && (!empty($_POST['title'])) && (!empty($_POST['description']))) {
        $deadline = (isset($_POST['deadline']) && !empty($_POST['deadline'])) ? $_POST['deadline'] : null;
        $request = $db->prepare("INSERT INTO ad (title, ad_date, deadline, description, id_user) VALUES (:title, NOW(), :deadline, :description, :id_user)");
        $request->execute([
            ':title' => $_POST['title'],
            ':deadline' => $deadline,
            ':description' => $_POST['description'],
            ':id_user' => $_SESSION['id']
        ]);
    } ?>
            <h3>Toutes les annonces</h3>
            <table class="table table-striped table-hover">
                <tr>
                    <td><b>Utilisateur</b></td>
                    <td><b>Titre de l'annonce</b></td>
                    <td><b>Deadline</b></td>
                    <td><b>Description</b></td>
                </tr>
                <?php

                $req = $db->query("SELECT * FROM ad");
                $ads = $req->fetchAll();
                foreach ($ads as $ad) {
                    $id = $ad['id_user'];
                    $req = $db->query("SELECT * FROM user WHERE id_user = $id");
                    $user = $req->fetch();
                    ?>
                    <tr>
                        <td>
                            <?php echo $user['username']; ?>
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
                        <td>
                                <?php
                                    if($_SESSION['id'] != $id) {
                                        ?>
                                        <form action="" method="post">
                                            <input type="submit" name="rep" value="Répondre">
                                        </form>
                                        <?php
                                    }
                                    ?>
                        </td>
                    </tr>

                    <?php
                    if (isset($_POST['rep'])) {
                        $_SESSION['id_ad'] = $ad['id_ad'];
                        $_SESSION['id_client'] = $user['id_user'];
                        header('Location: form_response.php');
                    }
                }
                ?>
            </table>
        </div>
    </div>
    <?php
}
else {
    ?>
    <a href="inscription.php">Inscription</a><br>
    <a href="connexion.php">Connexion</a>
<?php
}
?>
    </body>
</html>
