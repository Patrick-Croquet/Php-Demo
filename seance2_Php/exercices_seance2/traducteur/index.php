<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Traducteur Anglais - Français</h1>
    </header>

    <main>
        <?php if($result == null): ?>
            <form action="traducteur.php" method="POST">
                <ul>
                    <li>
                        <label for="word">Mot :</label>
                        <input type="text" id="word" name="word">
                    </li>
                    <li>
                        <label for="direction">Sens de traduction :</label>
                        <select id="direction" name="direction">
                            <option value="toEnglish">Français vers Anglais</option>
                            <option value="toFrench">Anglais vers Français</option>
                        </select>
                    </li>
                    <li>
                        <input type="submit" value="Traduire">
                    </li>
                </ul>
            </form>
        <?php else: ?>
            <p><?php echo $result ?></p>
        <?php endif; ?>
    </main>
</body>
</html>