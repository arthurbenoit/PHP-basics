<?php
// On définit le premier cookie
setcookie('pseudo', 'mateo21', time() + 365*24*3600, null, null, false, true);
//On définit le seconde cookie
setcookie('pays', 'France', time() + 365*24*3600, null, null, false, true);


//Maintenant on peut commencer à écrire le HTML

?>


<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <title>Ma super page PHP</title>

</head>

<body>
...
</body>
</html>