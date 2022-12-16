<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=blog','root','Formateur',$pdo_options);
$sql = "INSERT INTO news(auteur, titre, contenu, dateAjout, dateModif ) VALUES(:auteur, :titre, :contenu,  NOW(), NOW())";

//$requete = $db->query($sql);
//$requete = $db->prepare($sql);
//$requete->execute(array($_GET['auteur']));
$requete = $db->prepare($sql);
$requete->execute(array('auteur' => $_GET['auteur'],
                        'titre' => $_GET['titre'],
                        'contenu' => $_GET['contenu']));

$requete->closeCursor(); }
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>
</body>
</html>