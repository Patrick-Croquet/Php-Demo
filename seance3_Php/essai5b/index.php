<?php
$nvauteur = 'Christine';
$nvcontenu = 'Hello the World!';
$titre = 'Ma nouvelle';
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=test','root','root',$pdo_options);
//$sql = 'SELECT * FROM `news`';
//$sql = 'SELECT auteur, titre, contenu FROM news';
//$sql = 'SELECT id, auteur, titre, contenu, dateAjout, dateModif FROM news ORDER BY id DESC';
//$sql = "SELECT * FROM news WHERE auteur='Patrick'";
//$sql = "SELECT * FROM news WHERE auteur='Patrick' ORDER BY titre DESC";
//$sql = "SELECT * FROM news LIMIT 1, 3";
//$sql = "SELECT id,titre FROM news WHERE auteur = ?";
//$sql = "SELECT id, titre, contenu FROM news WHERE auteur = :auteur";
$sql = "UPDATE news SET auteur = :auteur, contenu = :nvcontenu, dateModif = NOW() WHERE titre = :titre"; 

//$requete = $db->query($sql);
//$requete = $db->prepare($sql);
//$requete->execute(array($_GET['auteur']));
$requete = $db->prepare($sql);
//$requete->execute(array('auteur' => $_GET['auteur']));
$requete->execute(array('auteur' => $nvauteur,'nvcontenu' => $nvcontenu,'titre' => $titre));


$sql2 = "SELECT * FROM news WHERE titre = :titre";
$requete2 = $db->prepare($sql2);
$requete2->execute(array('titre' => $titre));

while ($news = $requete2->fetch())
{
echo $news['id'] . " - " . $news['auteur'] . " : " . $news['titre'] . '<br />';
}
$requete->closeCursor(); }
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>