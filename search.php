<?
if(isset($_POST['requete']) && $_POST['requete'] != NULL) // on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
{
include 'includes/search.php';// on se connecte à MySQL. Je vous laisse remplacer les différentes informations pour adapter ce code à votre site.
$requete = htmlspecialchars($_POST['requete']); // on crée une variable $requete pour faciliter l'écriture de la requête SQL, mais aussi pour empêcher les éventuels malins qui utiliseraient du PHP ou du JS, avec la fonction htmlspecialchars().
$query = mysql_query("SELECT * FROM fonctions WHERE nom_fonction LIKE '%$requete%' ORDER BY id DESC") or die (mysql_error()); // la requête, que vous devez maintenant comprendre ;)
$nb_resultats = mysql_num_rows($query); // pour compter les résultats pour vérifier par après
if($nb_resultats != 0) // si le nombre de résultats est supérieur à 0, on continue
{
// afficher les résultats et la page qui les donne ainsi que leur nombre, avec un peu de code HTML pour faciliter la tâche.
?>


//A REVOIR LE NOMBRE DE RESULTATS TROUVES!!


<h3>Résultats de votre recherche.</h3>
 <!-- <p>Nous avons trouvé </p> -->
<? php
    echo "Nous avons trouvé ".$nb_resultats; //nombre de résultats 
    /* if($nb_resultats !=1){ 
    echo 'résultats'; 
}
    else {
    echo 'résultat'; 
} */

   ?> 
Voici les résultats que nous avons trouvés :<br/>
<br/>
<?
while($donnees = mysql_fetch_array($query)) // on fait un while pour afficher la liste des fonctions trouvées, ainsi que l'id qui permettra de faire le lien vers la page de la fonction
{
?>

A VOIR

<a href="fonction.php?id=<? echo $donnees['id']; ?>"><? echo $donnees['nom_fonction']; ?></a><br/>
<?
} 
?><br/>
<br/>
<a href="search.php">Faire une nouvelle recherche</a>
<?
} // Fini d'afficher les résultats ! Maintenant, nous allons afficher l'éventuelle erreur en cas d'échec de recherche et le formulaire.
else
{ // de nouveau, un peu de HTML
?>
<h3>Pas de résultats</h3>
<p>Nous n'avons trouvé aucun résultat pour votre requête "<? echo $_POST['requete']; ?>". <a href="search.php">Réessayez</a> avec d'autres mots clés.</p>
<?
}
mysql_close(); 
}
else
{
?>
<p>Tapez vos mots clés pour réaliser votre recherche.</p>
 <form action="search.php" method="Post">
<input type="text" name="requete" size="10">
<input type="submit" value="Valider">
</form>
<?
}
?>
