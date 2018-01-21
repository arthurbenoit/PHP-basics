
<?php // On utilise la fonction print_r pour afficher rapidement un tableau lorsqu'on code pour voir les infos qu'il contient
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

echo '<pre>'; // on remplace </br> par <pre> car avec cette fonction on ne génère par de HTML (mode debug PHP)
print_r($coordonnees);
echo '</pre>';
?>