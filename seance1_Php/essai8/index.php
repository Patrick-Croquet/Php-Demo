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
$volume = VolumeCone(3, 1);
echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;
?>