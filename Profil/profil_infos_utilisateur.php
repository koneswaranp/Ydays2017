<link rel="stylesheet" href="./profil.css">

<?php
session_start();
    include '../includes/init.php';
$id = $_SESSION['id'];
$req = $db->query("SELECT * FROM user WHERE id_user = $id");
$user = $req->fetch();
?>
    <div class="cover">
        <div id="pdp">

        </div>
        <div class="cvr" src="" alt="Photo de couverture"> </div>
        <h1>
            <?php  echo $user['username']; ?>
        </h1>
    </div>

    <!--
  <p>
        <img class="pdp" width: 10px, height: 10px;
src=" <?php //echo $pdp; ?>" title="Photo de Profil" <? //echo $nom; ?> />
        <!--    <img class="flottant_droite" src=" <? // echo img.urlencode($pdp); ?>" title="Photo de Profil" <? //echo $nom; ?> /> -->

    <!-- <span class="label_profil">Adresse email :
        <? //echo htmlspecialchars($email);  <br/> ?> </span>

        <span class="pseudo"><? // echo htmlspecialchars($nom); ?> </span>
    </p>
-->
    <br> <br><br><br>
    <div class="desc">
        <br>
        <div class="web">
            <br>
            <a href="github">
                <?php  echo $user['github']; ?> <br></a>
            <a href="linkedin">
                <?php  echo $user['linkedin']; ?> <br></a>
            <a href="projets">
                <?php  echo $user['perso']; ?> <br> </a>
        </div>
        <div class="description"> Description : <br> <br>
            <?php  echo $user['description']; ?>
        </div>
    </div>
