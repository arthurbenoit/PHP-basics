<?php

$note = 20;

switch ($note)
{
    case 0:
        echo "c'est une très mauvaise note !";
     break;

    case 10:
        echo "c'est la moyenne !";
     break;

    case 20:
        echo "c'est la meilleure note !";
     break;

    default:
        echo "Je n'ai pas de message à afficher pour cette note..";

}
?>