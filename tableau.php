<?php

$livres = ["livre1", "livre2", "livre3"];
foreach ($livres as $title){
    echo $title;
}



$ages = [17 , 34 , 49 , 2, 5];
$resultat = 0;
foreach ($ages as $age) {
    echo $age . " ";
    $resultat = $resultat + $age;
}

echo $resultat / count($ages);

