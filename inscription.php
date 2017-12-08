<?php
require ('./includes/init.php');
?>

<h2>Inscription</h2>
<form enctype="multipart/form-data" action="" method="post">
    <label for="username">Pseudo</label><br>
    <input type="text" name="username" id="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];} ?>"><br><br>
    <label for="last_name">Nom</label><br>
    <input type="text" name="last_name" id="last_name" value="<?php if(isset($_POST['last_name'])){echo $_POST['last_name'];} ?>"><br><br>
    <label for="first_name">Prénom</label><br>
    <input type="text" name="first_name" id="first_name" value="<?php if(isset($_POST['first_name'])){echo $_POST['first_name'];} ?>"><br><br>
    <label for="mail">Adresse mail</label><br>
    <input type="email" name="mail" id="mail" value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];} ?>"><br><br>
    <label for="mail2">Confirmation de l'adresse mail</label><br>
    <input type="email" name="mail2" id="mail2" value="<?php if(isset($_POST['mail2'])){echo $_POST['mail2'];} ?>"><br><br>
    <label for="password">Mot de passe</label><br>
    <input type="password" name="password" id="password"><br><br>
    <label for="password2">Confirmation mot de passe</label><br>
    <input type="password" name="password2" id="password2"><br><br>
    <label for="type">Type d'utilisateur</label><br>
    <select name="type" id="type">
        <option value="Développeur">Développeur</option>
        <option value="Utilisateur">Utilisateur</option>
    </select><br><br>
    <label for="phone">Phone</label><br>
    <input type="text" name="phone" id="phone" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>"><br><br>

    <label for="photo">Photo de profil</label><br>
    <input type="file" name="photo"><br><br>


    <input type="submit" content="S'inscrire">
</form>

<?php
if ((isset($_POST)) && (!empty($_POST['username'])) && (!empty($_POST['last_name'])) && (!empty($_POST['first_name']))
    && (!empty($_POST['mail'])) && (!empty($_POST['mail2'])) && (!empty($_POST['password'])) && (!empty($_POST['password2']))
    && (!empty($_POST['phone'])) && (!empty($_FILES['photo']))) {
    //Vérification que les adresses mail sont identiques
    if ($_POST['mail'] != $_POST['mail2']) {
        echo "Les adresses mail ne sont pas identiques";
    }
    else {
        $crypt_pwd = sha1($_POST['password']);
        $crypt_pwd2 = sha1($_POST['password2']);
        //Vérification que les mots de passe sont identiques
        if ($crypt_pwd != $crypt_pwd2) {
            echo "Les mots de passe ne sont pas identiques";
        } else {
            //Déplacement photo
            $file_name = $_FILES['photo']['name'];
            $tmp_path = $_FILES['photo']['tmp_name'];
            $new_path = "img/".$file_name;

            move_uploaded_file($tmp_path, $new_path);

            //Envoi des données en bdd
            $request = $db->prepare("INSERT INTO USER VALUES (NULL, :username, :last_name, :first_name, :mail, :password,
                                            :usertype, :phone, :photo)");
            $sending = $request->execute([
                ':username' => $_POST['username'],
                ':last_name' => $_POST['last_name'],
                ':first_name' => $_POST['first_name'],
                ':mail' => $_POST['mail'],
                ':password' => $crypt_pwd,
                ':usertype' => $_POST['type'],
                ':phone' => $_POST['phone'],
                ':photo' => $new_path
            ]);
        }
    }
}