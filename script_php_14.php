<?php


$file = fopen('ExerciceCSVScript.csv', 'r');
$fileArrivee = fopen('between30and50.csv', 'w');

while ($ligne = fgetcsv($file, 1000, ',')) {

    if (($ligne[2] >=30 && $ligne[2] <=50) || $ligne[2] == "age") {
        fputcsv($fileArrivee, $ligne);
    }

}
fclose($fileArrivee);

echo "fichier créé avec succès !";

