<?php
function calculCube($cote)
{
	$volume = $cote * $cote * $cote;
	return $volume;
}
$volume = calculCube(2);
echo "le volume d'un cube de côté 2 est de " . $volume;
?> 