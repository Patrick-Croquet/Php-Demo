<?php
function DireBonjour($nom)
{
echo 'Bonjour ' . $nom . ' !<br />';
}

DireBonjour('Marie');
DireBonjour('Patrice');
DireBonjour('Edouard');
DireBonjour('Pascale');
DireBonjour('François');
DireBonjour('Benoît');

echo "<br /><br />";
// Ci-dessous, la fonction qui calcule le volume du cône
function VolumeCone($rayon, $hauteur)
{
$calcul = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
return $calcul; // indique la valeur à renvoyer, ici le volume
}
$rayon = 5;
$hauteur = 3;
$volume = VolumeCone($rayon, $hauteur);
echo 'Le volume d\'un cône de rayon ' . $rayon . ' et de hauteur ' . $hauteur . ' est de ' . $volume;
?>