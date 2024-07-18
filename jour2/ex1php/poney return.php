<?php

$aponey= presentation(" x file", " 2.50", " 80kg" ," 4 ailes" ,"noir" );
$bponey= presentation("bean" , " 1.80 " , "50kg" , " 2 ailes"  , " blanc" );
$cponey= presentation("sephiro" ,"1.90" , " 70kg" , "1 ailes " , "gris et blanc" );



function  presentation ($prenom,$taille,$poids,$ailes,$robe){




$caracteristique= $prenom . "  " . $taille . "   " . $poids . " " . $ailes ." " . $robe;


return $caracteristique;

}


echo"mon poney alien".$aponey."<br>";
echo"mon poney ".$bponey."<br>";
echo"mon poney ". $cponey."<br>";









?>

















