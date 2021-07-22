<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=test1','root','root',$pdo_options);

$requete = $db->query("SELECT j.nom nom_jeu, p.prenom prenom_proprietaire FROM proprietaires p INNER JOIN jeux_video j ON j.id_proprietaire = p.id");

while ($donnees = $requete->fetch())
{
echo $donnees['prenom_proprietaire'] .' possède '. $donnees['nom_jeu'];
echo '<br />';
}
$requete->closeCursor();
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>