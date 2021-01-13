<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
<a href="./">Retour à la page d'accueil</a>
<?php
    $monfichier = fopen('compteur.txt', 'r+');
    $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
    $pages_vues++; // On augmente de 1 ce nombre de pages vues
    fseek($monfichier, 0); // On remet le curseur au début du fichier
    fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
    fclose($monfichier);
    echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?>    
</body>
</html>