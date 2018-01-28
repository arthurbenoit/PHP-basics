<?php
// On démarre ka session AVANT d'écrire du code HTML
session_start();

// Création de variables de session dans $_SESSION

$_SESSION['prenom'] = 'Arthur';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 25;
?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title> Titre de la page</title>
    </head>
    <body>
    <p>
        Salut <?php echo $_SESSION['prenom'];?> ! <br />
        Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ?
    </p>
    <p>
        <a href="mapage.php">Lien vers mapage.php</a> <br />
        <a href="monscript">lien vers monscript.php</a> <br />
        <a href="informations.php">Lien vers informations.php</a>
    </p>
    </body>
</html>
