<?php

$tab[] = null;

for($i = 0; $i<30 ; $i++)
{
    $randomNumber = random_int(20, 100);
    $tab[$i] = $randomNumber;
}
echo "taille initiale du tableau : " . count($tab) . "\n";

$j =0;
while ($j<=count($tab)-1)
{
    unset($tab[$j+1]);
    $j += 1;
}

echo "taille intermédiaire du tableau : " . count($tab) . "\n";

for ($i = 15 ; $i<=17 ; $i++  )
{
    $key = "key".$i;
    echo "saisir une nouvelle valeur pour l'index " . $key . " : ";
    $value = readline();
    $tab[$key] = $value;
    echo "\najout manuel de la valeur : " . $tab[$key] . "\n";
}


echo "\ntaille finale du tableau : " . count($tab) . "\n";

echo "\n ****** Bye Bye ******\n";
