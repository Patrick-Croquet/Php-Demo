<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=blog','root','Formateur',$pdo_options);
//$sql = 'SELECT * FROM `news`';
//$sql = 'SELECT auteur, titre, contenu FROM news';
//$sql = 'SELECT id, auteur, titre, contenu, dateAjout, dateModif FROM news ORDER BY id DESC';
//$sql = "SELECT * FROM news WHERE auteur='Patrick'";
//$sql = "SELECT * FROM news WHERE auteur='Patrick' ORDER BY titre DESC";
$sql = "SELECT * FROM news LIMIT 2, 4";
$requete = $db->query($sql);
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