<?php
$db = new PDO('mysql:host=localhost;dbname=blog','root','Formateur');

//$sql = 'SELECT * FROM `news`';
//$sql = 'SELECT auteur, titre, contenu FROM news';
$sql = 'SELECT id, auteur, titre, contenu, dateAjout, dateModif FROM news ORDER BY id DESC';
$requete = $db->query($sql);

$news = $requete->fetch();

echo $news['auteur']; 
?>