<?php

$tab  = array();
for($i = 0 ; $i<10 ; $i++)
{

    $tab[$i] = rand(1, 50);
}

    $result = bubbleSort($tab);
    print_r($result);

function bubbleSort(array $tableau)
{

    for ($j = 0; $j < count($tableau) - 1; $j++) {
        for ($i = 0; $i < count($tableau) - 1; $i++) {

            if ($tableau[$i] > $tableau[$i + 1]) {
                $temp = $tableau[$i];
                $tableau[$i] = $tableau[$i + 1];
                $tableau[$i + 1] = $temp;
            }
        }
    }
    return $tableau;
}


//TEST
//
//$val1 = 12;
//$val2 = 10;
//if($val1 > $val2)
//{
//    $temp = $val1;
//    $val1 = $val2;
//    $val2 = $temp;
//}
//
//echo $val1 . "-" . $val2;