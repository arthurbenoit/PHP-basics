<?php
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

foreach($prenoms as $element)
{
    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
/*
      Afficher aussi la clé (nom de la variable)

            foreach($coordonnees as $cle => $element)

      Exemple :

            $coordonnees = array (
                'prenom' => 'François',
                'nom' => 'Dupont',
                'adresse' => '3 Rue du Paradis',
                'ville' => 'Marseille');

            foreach($coordonnees as $cle => $element)
            {
                echo '[' . $cle . '] vaut ' . $element . '<br />';
            }
 */
?>

