<?php


$file = fopen('ExerciceCSVScript.csv', 'r');
$fileArrivee = fopen('moreThan5000.csv', 'w');

while ($ligne = fgetcsv($file, 1000, ','))
{

    if($ligne[4] >=5000 || $ligne[4] == "salary")
    {
        fputcsv($fileArrivee, $ligne);
    }

}
fclose($fileArrivee);

echo "fichier créé avec succès !";

