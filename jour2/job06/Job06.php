<?php


$hauteur = 10;
$largeur = 20;

// Dessiner le rectangle
for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $largeur; $j++) {
        if ($i == 1 || $i == $hauteur || $j == 1 || $j == $largeur) {
            echo "_";
        } else {
            
        }
    }
    echo "<br>";
}   
?>
