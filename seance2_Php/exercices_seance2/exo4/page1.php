<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>exo2</title>
</head>
<body>
    
<div id="bloc_page">
    <!-- L'en-tête -->
    <?php include("entete.php"); ?>
    <!-- Le corps -->
        <section id="section">
        <p>
        <?php
        if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
        echo "<h3>Bonjour " . $_SESSION['prenom'] . " " . $_SESSION['nom'] ." !</h3>";
        }
        ?>
        </p>
    </section>
        <!-- Le pied de page -->
        <?php include("pied_de_page.php"); ?>
</body>
</html>        