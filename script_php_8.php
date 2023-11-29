<?php

echo "saisir un nombre entre 5 et 20 : ";


do
{
    $nombreBoucle = readline();


}while(!($nombreBoucle >=5 && $nombreBoucle <=20));

$i = 1;
while($i<=$nombreBoucle)
{
   $result =  somme(rand(300,1000), rand(300,1000), rand(300, 1000));
    echo "resultat somme " .$i. ": " . $result ."\n";
    $i++;
}




function somme(int $nombre1, int $nombre2, int $nombre3)
{
    return $nombre1+$nombre2+$nombre3;
}