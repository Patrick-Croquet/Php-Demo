<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// On crée quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Patrick'; 
$_SESSION['nom'] = 'Croquet'; 
$_SESSION['age'] = 24;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
        <p>Salut <?php echo $_SESSION['prenom']; ?> !<br />
        Tu es à l'accueil de mon site. Tu veux aller sur une autre page ?</p>
        <p><a href="mapage.php">Lien vers mapage.php</a><br />
        <a href="monscript.php">Lien vers monscript.php</a><br /> 
        <a href="informations.php">Lien vers informations.php</a></p>    
    </body> 
</html>