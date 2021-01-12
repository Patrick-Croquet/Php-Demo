<?php
    date_default_timezone_set('Europe/Paris');
    $script_tz = date_default_timezone_get();

    if (strcmp($script_tz, ini_get('date.timezone'))){
        echo 'Le décalage horaire du script diffère du décalage horaire défini dans le fichier ini.';
    } else {
        echo 'Le décalage horaire du script est équivalent à celui défini dans le fichier ini.';
    }
    echo '<br />';
    $date = date_create(null, timezone_open('Europe/Paris'));
    $tz = date_timezone_get($date);
    echo timezone_name_get($tz);
    // Enregistrons les informations de date dans des variables
    $jour = date('d'); 
    $mois = date('m'); 
    $annee = date('Y');
    $heure = date('H'); 
    $minute = date('i');
    // Maintenant on peut afficher ce qu'on a recueilli
    echo '<br />Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute .' mn<br />';
?>  