<?php


echo "saisir un nombre entre 5 et 20 : ";


do
{
    $nombreBoucle = readline();

}while(!($nombreBoucle >=5 && $nombreBoucle <=20));


$tableauFinal = tabCreator();
sumTab($tableauFinal);


/*Définition des fonctions*/

function tabCreator()
{
    $tableau[] = null;

    for($i=0; $i <50; $i++)
    {
        $tableau[$i] = rand(30, 100);
    }
    return $tableau;
}

function sumTab($tableau)
{
    $somme = 1000000;
    for($i=0; $i<count($tableau); $i++)
    {
        $somme += $tableau[$i];
    }
    echo "resultat somme tableau : " . $somme ;
}