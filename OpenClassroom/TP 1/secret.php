<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8"/>
        <title> Code d'accès au serveur central de la NASA</title>
    </head>
    <body>

            <?php

        if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == 'kangourou')

            // Si le mot de passe est bon
        {
            // On affiche les codes

        ?>

            <h1>Voici les codes d'accès :</h1>
            <p><strong>BR54-GR51-RFDE-43ED-F1D4</strong></p>

        <p>
         Cette page est réservée au personnel de la NASA. Les codes d'accès sont changés toutes les semaines.
        </p>


            <?php
         }
         else // Sinon on affiche un message d'erreur
         {

            echo '<p>Mot de passe incorrect</p>';

         }

         ?>



    </body>

</html>