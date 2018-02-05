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

// La requête INSERT TO préparée (plus facile à lire et écrire)
$req =$bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');


$req->execute(array(
        'nom' => $nom,
        'possesseur' => $possesseur,
        'console' => $console,
        'prix' => $prix,
        'nbre_joueurs_max' => $nbre_joueurs_max,
        'commentaires' => $commentaires
));

echo 'Le jeu a bien été ajouté !';

?>