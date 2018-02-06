<?php
// Connexion BDD
try
{
    $bdd = new PDO ('mysql:host=localhost;dbname=test;charset=utf8', 'root','root');
}
catch (Exception $e)
{
            die('Erreur : '.$e->getMessage());
}


// fonction UPPER -> utilisée ici pour renvoyer tous les noms en majuscule
$reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');

while ($donnees = $reponse->fetch())
{
    echo $donnees['nom_maj'] . '<br />';
}

$reponse->closeCursor();

?>