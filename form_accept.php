<?php
session_start();
require('includes/init.php');
$id_ad = $_SESSION['id_ad'];
echo $id_ad;
?>

<form action="" method="post">
    <select name="accept">
        <option value="1">En attente</option>
        <option value="2">Accepter</option>
        <option value="3">Refuser</option>
    </select><br>
    <label for="comments">Commentaires :</label><br>
    <textarea name="comments" id="" cols="30" rows="10"></textarea><br>
    <button type="submit" name="valid" id="valid" value="valider">Valider</button>
</form>
<?php

if (isset($_POST['valid']) && ($_POST['accept'] != "1")) {
    if ($_POST['accept'] = "2") {
        $req = $db->prepare("UPDATE response SET accepted = 'true', comments = :comments WHERE id_ad = $id_ad");
        $req->execute([
            ':comments' => $_POST['comments']
        ]);
        //print_r($req->errorInfo());
        header('Location:page_membre.php');
    } else {
        $req = $db->prepare("UPDATE response SET accepted = 'false', comments = :comments WHERE id_ad = $id_ad");
        $req->execute([
            ':comments' => $_POST['comments']
        ]);
        header('Location:page_membre.php');
    }
}

?>
