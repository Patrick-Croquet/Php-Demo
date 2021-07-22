<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    <body>
        <p>Re-bonjour !</p>
        <p>Je me souviens de toi ! Tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />Tu as <?php echo $_SESSION['age']; ?> ans.</p>    
    </body> 
</html> 