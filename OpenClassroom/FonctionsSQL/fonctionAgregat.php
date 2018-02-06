<?php
// Connexion BDD
try
{
    $bdd = new PDO ('mysql:host=localhost;dbname=test;charset=utf8','root','root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

// Fonction AVG -> Calcule la moyenne de champs (ici prix) de Patrick
$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video WHERE possesseur=\'Patrick\'');

$donnees = $reponse->fetch();
echo $donnees['prix_moyen'];

$reponse->closeCursor();

?>