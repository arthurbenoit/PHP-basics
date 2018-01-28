<?php
session_start();
?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title> Page informations</title>
    </head>

    <body>
    <p> Re-bonjour !</p>
    <p>
            Je me souviens de toi ! tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
            Et je crois bien que tu as <?php echo $_SESSION['age']; ?> ans, c'est ça ?
    </p>
    </body>
</html>
