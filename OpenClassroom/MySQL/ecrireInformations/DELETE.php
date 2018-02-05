<?php
// Connexion à la BDD
try
{
    $bdd = new PDO('mysql:host:localhsot;dbname=test;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$bdd->exec('DELETE FROM jeux_video WHERE nom=\'Battlefield 1942\'');

echo'Les entrées ont été supprimées !';

?>