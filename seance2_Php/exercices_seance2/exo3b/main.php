<section id="section">
    <article>        
            <?php
            if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
            echo "<p>Bonjour " . $_SESSION['prenom'] . " " . $_SESSION['nom'] ." !</p>"; 
            }
            ?>    
        <p>Article</p>
    </article>
    <aside>
        <p>Aside </p>
    </aside>
</section>