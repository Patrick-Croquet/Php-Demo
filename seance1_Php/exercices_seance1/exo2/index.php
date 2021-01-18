<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
</head>
<body>
    <?php
    $firstname = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
    var_dump($firstname);
    unset($firstname[3]);
    echo("<br />");
    var_dump($firstname);
    ?>
</body>
</html>