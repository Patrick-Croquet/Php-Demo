<section>
    <article>
    <?php
        if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
        echo "<h3>Bonjour " . $_SESSION['prenom'] . " " . $_SESSION['nom'] ." !</h3>";
        echo "<p><a href='logout.php'>Se déconnecter</a></p>"; 
        }
        else
        {
        echo "<p><a href='login.php'>Se connecter</a></p>";
        }
        ?> 
        <p>Article </p>
    </article>
        <aside>
    <p>Aside </p>
    </aside>
</section>