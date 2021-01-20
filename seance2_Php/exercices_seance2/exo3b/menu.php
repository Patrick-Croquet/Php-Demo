<?php
?>
<!-- Le menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Ma page</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page1.php">Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="nav nabar-nav float-md-right">
                <?php
                    if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
                    ?>  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo ($_SESSION['prenom'] . " " . $_SESSION['nom']); ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dLabel" style="left: -5px;">
                            
                                <a href="/admin" class="dropdown-item">Tableau de bord</a>
                                <div class="dropdown-diviseur"></div>
                                <a href="logout.php" class="dropdown-item">Déconnexion</a>
                            
                        </div>
                    </li>
                    <?php
                    } else {
                    ?>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Connexion</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>