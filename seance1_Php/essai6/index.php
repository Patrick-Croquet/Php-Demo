<?php

/*
    $cote = 4; // portée globale

    function calculCube() {
    //$cote = 4; // portée locale
    global $cote;
    echo $cote*$cote*$cote;
}
calculCube();

function calculCube() {
    $cote = 4;
    return $cote*$cote*$cote;
}
echo calculCube();
*/

function calculCube($cote) {
    return $cote*$cote*$cote;
}

$volume = calculCube(4);
echo $volume;

?>
