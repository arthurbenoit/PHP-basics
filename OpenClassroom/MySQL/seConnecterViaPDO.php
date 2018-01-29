<?php
// Sous MAMP, en local

$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','root');

// Sous WAMP (Windows) par défaut en local on laisse le champ mot de passe vide

?>



<?php

// exemple de code pour une connexion en ligne

$bdd = new PDO('mysql:host=sql;hebergeur.com;dbname=mabase;charset=utf8','pierre.durand', '34FSDede4');
?>
