<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=test','root','',$pdo_options);
$requete = $db->query('SELECT AVG(prix) AS prix_moyen, ROUND(AVG(prix), 2) AS prix_moyen_arrondi FROM jeux_video');

$donnees = $requete->fetch();
echo $donnees['prix_moyen'] . ' => ' . $donnees['prix_moyen_arrondi'];
$requete->closeCursor();
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>