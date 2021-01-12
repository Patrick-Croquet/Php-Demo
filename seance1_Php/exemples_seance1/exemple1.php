<?php
	function str_shuffle_unicode($str) {
					$tmp = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
					shuffle($tmp);
					return join("", $tmp);
	}
                    
    $chaine = 'Cette chaîne va être mélangée !';
    $chaine = mb_convert_encoding($chaine, "ISO-8859-1");
    //$chaine = str_shuffle_unicode($chaine);
    $chaine = utf8_encode(str_shuffle($chaine));
    //$chaine = str_shuffle($chaine);
                   
    echo $chaine;				   
?>  