<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo5</title>
</head>
<body>
<?php
$my_array = array("Le","Chat","Botté","de","Charles","Perrault"); 
$new_array = array_map('strlen', $my_array); // En premier argument on a la fonction callback strlen(), en deuxième le tableau => array(2,4,5,2,7,8)
echo "La longueur du plus petit élément est " . min($new_array) ."."; // affiche 2
echo "<br />";
echo "La longueur du plus grand élément est " . max($new_array) ."."; // affiche 8 
?>

</body>
</html>