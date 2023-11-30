<?php

$tab[][] = null;
// $tab = [][];
// $tab = array(array());

for ($i = 0 ; $i<100 ; $i++)
{
    for($j = 0 ; $j<10 ; $j++)
    {
        $tab[$i][$j] = rand(10 , 10_000);
    }
}

for ($i = 0 ; $i<100 ; $i++)
{
    for($j = 0 ; $j<10 ; $j++)
    {
        echo $tab[$i][$j] . " - ";
    }
    echo "\n";
}

$file = fopen('noah.csv', 'w');
foreach ($tab as $item)
{
    fputcsv($file, $item);
}
fclose($file);