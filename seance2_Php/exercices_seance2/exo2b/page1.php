<?php include("entete.php"); ?>
        <!-- Le corps -->        
        <?php
        if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
        echo "<h3>Bonjour " . $_SESSION['prenom'] . " " . $_SESSION['nom'] ." !</h3>";
        echo "<p><a href='logout.php'>Se déconnecter</a></p>"; 
        }
        ?>
        <!-- Le pied de page -->
        <?php include("pied_de_page.php"); ?>