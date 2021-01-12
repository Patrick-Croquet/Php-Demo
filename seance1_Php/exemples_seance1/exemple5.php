<?php
echo 'Bonjour en utilisant une boucle for dans la fonction<br />';
function DireBonjour2($prenoms)
{
   for($index = 0; $index < count($prenoms); $index++) {    
       echo 'Bonjour ' . $prenoms[$index] . ' !<br />';
   }
}               
                    
$prenoms = array ('Marie','Patrice','Edouard','Pascale','François','Benoît');
DireBonjour2($prenoms);
?> 
                
<?php
/*echo 'Bonjour en utilisant une boucle foreach<br />';
$prenoms2 = array ('Marie','Patrice','Edouard','Pascale','François','Benoît');
foreach($prenoms2 as $element)
{
  echo 'Bonjour ' . $element . ' !<br />'; // affichera $prenoms[0], $prenoms[1], etc...
}*/ 
?>  