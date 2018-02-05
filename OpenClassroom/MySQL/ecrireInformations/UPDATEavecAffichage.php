<?php
// Connexion BDD
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root','root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On affiche la variable $nb_modifs qui contient la requête sur $bdd
$nb_modifs = $bdd->exec('UPDATE jeux_video SET possesseur = \'Florent\' WHERE possesseur = \'Michel\'');

echo $nb_modifs . ' entrées ont été modifiées !';
?>