<?php

$tab[] = null;

for($i = 0; $i<30 ; $i++)
{
    $randomNumber = random_int(20, 100);
    $tab[$i] = $randomNumber;
    if($tab[$i] == $randomNumber)
    {
        echo "nouvelle valeur incluse : " . $randomNumber . "\n";
    }
    else{
        echo "erreur lors de l'ajout du nombre pour l'index " .$i . "\n";
        break;
    }
}

echo "\nliste des éléments du tableau : \n";
foreach ($tab as $item) {

    echo $item . " - ";
}
sort($tab);

echo "\nliste des éléments triés du tableau : \n";
foreach ($tab as $item) {

    echo $item . " - ";
}
