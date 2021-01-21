<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=test','root','',$pdo_options);
$requete = $db->query('SELECT UPPER(nom) AS nom_maj, LENGTH(nom) AS nom_length FROM jeux_video');
while ($donnees = $requete->fetch())
{
echo $donnees['nom_maj'] . ' - ' . $donnees['nom_length'] . '<br />';
}
$requete->closeCursor(); 
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>