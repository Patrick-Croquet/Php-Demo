<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=test','root','root',$pdo_options);

$requete = $db->query("SELECT `auteur`, DAY(`dateAjout`) AS jour, MONTH(`dateAjout`) AS mois, YEAR(`dateAjout`) AS annee, HOUR(`dateAjout`) AS heure, MINUTE(`dateAjout`) AS minute, SECOND(`dateAjout`) AS seconde FROM `news`");

while ($donnees = $requete->fetch())
{
echo $donnees['auteur'] .' a ajouté une info le '. $donnees['jour'] . '/' . $donnees['mois'] . '/' . $donnees['annee'];
echo '<br />';
}
$requete->closeCursor();
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>