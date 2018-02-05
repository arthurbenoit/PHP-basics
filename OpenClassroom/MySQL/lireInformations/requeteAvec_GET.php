<?php

// On donne des valeurs à $_GET pour afficher un résultat
$_GET['possesseur'] = 'Patrick';
$_GET['prix_max'] = 10;
?>


<?php

// On connecte la BDD
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','root');
}
catch(Exception $e)

// On renvoie une erreur s'il y a
{
        die('Erreur : ' .$e->getMessage());
}

$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ? AND prix <= ? ORDER BY prix'); // On prépare la requête pour éviter les injections SQL
$req->execute(array($_GET['possesseur'], $_GET['prix_max']));                                                        // On exécute en expliquant par quoi remplacer les "?"

echo '<ul>';
while ($donnees = $req->fetch())

// On boucle pour afficher ligne par ligne + On continue tant qu'il y a une valeur à afficher = true
{
    echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
}
echo '</ul>';

$req->closeCursor();

?>