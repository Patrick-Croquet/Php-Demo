<?php

/*function calculCube() {
    $cote = 4;
    echo $cote*$cote*$cote;
}
calculCube();

function calculCube() {
    $cote = 4;
    return $cote*$cote*$cote;
}
echo calculCube();*/

function calculCube($cote) {
    return $cote*$cote*$cote;
}

$volume = calculCube(5);
echo $volume;
?>
