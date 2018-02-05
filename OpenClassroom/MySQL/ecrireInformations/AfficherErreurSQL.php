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

$reponse = $bdd->query('SELECT nom FROM jeux_video') or die(print_r($bdd->errorInfo()));

?>