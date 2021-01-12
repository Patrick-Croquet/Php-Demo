<?php
echo 'Supprimez le 4ème élément<br />';
$prenoms3 = array ('Marie','Patrice','Edouard','Pascale','François','Benoît');
unset($prenoms3[3]);
foreach($prenoms3 as $key =>$element)
{
	echo $key . ' - Bonjour ' . $element . ' !<br />'; // affichera $prenoms[0], $prenoms[1], etc...
}
echo 'Ajoutez un élément à l\'indice 3 et triez le tableau suivant l\'indice par ordre croissant<br />';
$prenoms3[3] = 'Albert';
ksort($prenoms3);
foreach($prenoms3 as $key =>$element)
{
	echo $key . ' - Bonjour ' . $element . ' !<br />'; // affichera $prenoms[0], $prenoms[1], etc...
}
                    
?>