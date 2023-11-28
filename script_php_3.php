<?php

printf("saisir un mot : ");
$mot = readline();

for ($i = 0 ; $i<strlen($mot) ; $i++)
{
$lettre = $mot[$i];
echo "\n lettre " . $mot[$i];

}

