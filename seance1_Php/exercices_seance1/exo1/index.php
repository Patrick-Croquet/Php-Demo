<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>
<body>
<?php
$firstname = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
asort($firstname); // les index du tableau ne sont pas réagencés.
echo "<ul>";
foreach($firstname as $key=>$value){
    echo "<li>$key ". $value ."</li>";
}
echo "</ul>";
?>
</body>
</html>


