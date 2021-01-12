<?php
$phrase = 'Bonjour ! Je suis une phrase !';
$longueur = strlen($phrase);
echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;

echo "<br /><br />";

$ma_variable = str_replace('m', 'r', 'bim bam boum');
echo $ma_variable;

echo "<br /><br />";

$chaine = 'Cette chaîne va être mélangée !';
$chaine = str_shuffle($chaine); // encodage en utf8
echo $chaine;

echo "<br /><br />";
$chaine = 'COMMENT CA JE CRIE TROP FORT ?';
$chaine = strtolower($chaine);
echo $chaine;
$chaine = strtoupper($chaine);
echo "<br />" . $chaine;

echo "<br />";
// Enregistrons les informations de date dans des variables
$jour = date('d');
$mois = date('m');
$annee = date('Y');
$heure = date('H');
$minute = date('i');
// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure. ' h ' . $minute;
?>