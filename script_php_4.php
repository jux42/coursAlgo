<?php

printf("entrez votre salaire :\n");

$salary = readline();
$monthDay = 1;
while($monthDay<=30)
{

    $randomSub = random_int(30, 200);
    $salary-=$randomSub;


    if($salary <=0)
    {
        $salary = 0;
        echo "mon compte est vide et on est le " . $monthDay . "du mois.\n";
        break;
    }

    echo "somme restante au jour " .$monthDay .": " . $salary . "euros. \n";

    $monthDay++;
}
if ($salary>0)
{
    echo "vous économisez" . $salary . ", félicitations !\n";
}
else exit();
