<?php
// Connexion BDD
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','root');
}
catch(Exception $e)
{
    die('Erreur : ' .$e->getMessage());
}

// Effectuer des modifications dans la BDD
$bdd->exec('UPDATE jeux_video SET prix= 10, nbre_joueurs_max = 32 WHERE nom = \'Battlelfield 1942\'');
?>