
<?php


$vodka=bouteille(1,2);
$biere=bouteille(1,5);
$wisky=bouteille(4,10);






function bouteille($alcool,$sirop){

    $total=($alcool/$sirop)*100;
    return $total;


}

echo "Ma vodka a" . $vodka ."% <br>" ;
echo "Ma biere a" . $biere ."% <br>";
echo"Mon wisky a" . $wisky ."% <br>";


?>


