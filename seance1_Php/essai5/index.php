<?php
echo "______ Boucle While ________ <br />";
$nombre_de_lignes = 1;
while ($nombre_de_lignes <= 5)
{
echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />'; $nombre_de_lignes++;
}
echo "______ Boucle For ________ <br /";
$nombre_de_lignes = 0;
for ($nombre_de_lignes = 0; $nombre_de_lignes <= 5; $nombre_de_lignes++)
{
echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />'; }

?>