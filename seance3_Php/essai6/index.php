<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=test','root','root',$pdo_options);
//$requete = $db->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');
//$requete = $db->query('SELECT ROUND(prix, 2) AS prix_arrondi FROM jeux_video');
$requete = $db->query('SELECT UPPER(nom) AS nom_maj, ROUND(prix, 2) AS prix_arrondi FROM jeux_video');
while ($donnees = $requete->fetch())
{
//echo $donnees['prix_arrondi'] . '<br />';
//echo $donnees['nom_maj'] . '<br />';
echo $donnees['nom_maj'] . ' : ' . $donnees['prix_arrondi'] . '<br />';
}
$requete->closeCursor(); 
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>