<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=test','root','',$pdo_options);
//$sql = 'SELECT * FROM `news`';
//$sql = 'SELECT auteur, titre, contenu FROM news';
//$sql = 'SELECT id, auteur, titre, contenu, dateAjout, dateModif FROM news ORDER BY id DESC';
//$sql = "SELECT * FROM news WHERE auteur='Patrick'";
//$sql = "SELECT * FROM news WHERE auteur='Patrick' ORDER BY titre DESC";
//$sql = "SELECT * FROM news LIMIT 1, 3";
$sql = "SELECT id,titre FROM news WHERE auteur = ?";

//$requete = $db->query($sql);
$requete = $db->prepare($sql);
$requete->execute(array($_GET['auteur']));
while ($news = $requete->fetch())
{
echo $news['id'] . " - " . $news['titre'] . '<br />';
}
$requete->closeCursor(); }
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>