<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=test','root','',$pdo_options);

$requete = $db->query("SELECT Round(AVG(prix), 2) AS prix_moyen, console FROM jeux_video GROUP BY console");

while ($donnees = $requete->fetch())
{
echo ' prix moyen: ' . $donnees['prix_moyen'] . ' par console : ' . $donnees['console'];
echo '<br />';
}
$requete->closeCursor();
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>