<?php
// On crée notre array $prenoms
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 5; $numero++)
{
echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1], etc..
}

echo "______________________<br />";
$coordonnees = array (
'prenom' => 'François',
'nom' => 'Dupont',
'adresse' => '3 Rue du Paradis',
'ville' => 'Marseille');
foreach($coordonnees as $element)
{
echo $element . '<br />';
}

echo "______________________<br />";

foreach($coordonnees as $cle => $element)
{
echo '[' . $cle . '] vaut ' . $element . '<br />';
}

echo "______________________<br />";

    if (array_key_exists('nom', $coordonnees))
    {
    echo 'La clé "nom" se trouve dans les coordonnées !';
    }
    if (array_key_exists('pays', $coordonnees))
    {
    echo 'La clé "pays" se trouve dans les coordonnées !';
    }

echo "<br />______________________<br />";
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');
if (in_array('Myrtille', $fruits))
{
echo 'La valeur "Myrtille" se trouve dans les fruits !';
}
if (in_array('Cerise', $fruits))
{
echo 'La valeur "Cerise" se trouve dans les fruits !';
}
echo "<br />______________________<br />";
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');
$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';
$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position;
?>