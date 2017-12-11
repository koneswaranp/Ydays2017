<?php
require ('./includes/init.php');
session_start();
?>
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
}