<?php
session_start();
require ('./includes/init.php');

$id = $_SESSION['id'];
$req = $db->query("SELECT * FROM user WHERE id_user = $id");
$user = $req->fetch();

?>
<a href="page_membre.php"> < Retour</a>
<h3>Changement de mot de passe</h3>
<form action="" method="post">
    <label for="old_pwd">Ancien mot de passe</label><br>
    <input type="password" name="old_pwd" id="old_pwd"><br>

    <label for="new_pwd">Nouveau mot de passe</label><br>
    <input type="password" name="new_pwd" id="new_pwd"><br>

    <label for="new_pwd2">Confirmation du nouveau mot de passe</label><br>
    <input type="password" name="new_pwd2" id="new_pwd2"><br><br>

    <input type="submit" value="Changer de mot de passe">
</form>

<?php
if ((isset($_POST)) && (!empty($_POST['old_pwd'])) && (!empty($_POST['new_pwd'])) && (!empty($_POST['new_pwd2']))) {
    $old_pwd = sha1($_POST['old_pwd']);
    $old_pwd2 = $user['password'];
    $new_pwd =sha1($_POST['new_pwd']);
    $new_pwd2 = sha1($_POST['new_pwd2']);

    if($old_pwd != $old_pwd2){
        echo "Votre \"ancien\" mot de passe est erroné.";
    }
    elseif($new_pwd != $new_pwd2) {
        echo "Les nouveaux mots de passe ne sont pas identiques";
    }
    else {
        $req = $db->prepare("UPDATE user SET password = :password WHERE id_user = $id");
        $req->execute([
            ':password' => $new_pwd
        ]);
        header('Location: page_membre.php');
    }

}
