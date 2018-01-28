<?php
// 1 : On ouvre le fichier
$monFichier = fopen('nomDuFichier', 'r+');

// 2 : Nos opérations sur le fichier

// 3 : On ferme le fichier
fclose($monFichier);
?>


Les modes d'ouvertures de fichier

    r


    Ouvre le fichier en lecture seule. Cela signifie que vous pourrez seulement lire le fichier.

    r+


    Ouvre le fichier en lecture et écriture. Vous pourrez non seulement lire le fichier, mais aussi y écrire (on l'utilisera assez souvent en pratique).

    a


    Ouvre le fichier en écriture seule. Mais il y a un avantage : si le fichier n'existe pas, il est automatiquement créé.

    a+


    Ouvre le fichier en lecture et écriture. Si le fichier & n'existe pas, il est créé automatiquement. Attention : le répertoire doit avoir un CHMOD à 777 dans ce cas ! À noter que si le fichier existe déjà, le texte sera rajouté à la fin.
