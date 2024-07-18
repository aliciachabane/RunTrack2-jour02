<?php

for($a =2; $a <=1000; $a++){

    $nombre_premier=true;
 
    for($b=2; $a > $b; $b++ ){
    if($a % $b==0) 
  
  
  $nombre_premier=false;      
break;
 }

{

 if($nombre_premier)
echo $a . "<br>";



}

  }


?>