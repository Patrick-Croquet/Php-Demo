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