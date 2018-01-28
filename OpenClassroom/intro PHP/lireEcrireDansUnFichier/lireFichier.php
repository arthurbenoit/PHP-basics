<?php

// 1 : On ouvre le fichier
$monFichier = fopen('compteur.txt', 'r+');

// 2 : On lit la première ligne du fichier
$ligne = fgets($monFichier);

// 3 : Quand on a fini de l'utiliser on ferme le fichier
fclose($monFichier);
?>