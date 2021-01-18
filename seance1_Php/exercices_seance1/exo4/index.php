<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo4</title>
</head>
<body>
    <?php
    $original = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

    //$original[4]="Leeloo";

    //array_push($original,"Leeloo");
    $insert = array('Leeloo');
    //$original = array_slice($original,0,2);
    //array_splice($original,2);
    array_splice($original,4,0,$insert);

    //$original = array_diff($original,['Nicole','Véronique','Benoît']);



    echo "<ul>";
    foreach($original as $key=>$value){
        echo "<li>$key ". $value ."</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>