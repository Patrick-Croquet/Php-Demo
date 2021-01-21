<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=test','root','',$pdo_options);
//$requete = $db->query("SELECT SUM(prix) AS prix_total FROM jeux_video WHERE possesseur='Patrick'");

$requete = $db->query("SELECT SUM(prix) AS prix_total, MAX(prix) AS prix_max, MIN(prix) AS prix_min, COUNT(*) AS nbjeux FROM jeux_video");

$donnees = $requete->fetch();
echo ' prix total du panier : ' . $donnees['prix_total'] . ' - max : ' . $donnees['prix_max'] . ' - min : ' . $donnees['prix_min'] . ' - nombre total de jeux : ' . $donnees['nbjeux'];
$requete->closeCursor();
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>