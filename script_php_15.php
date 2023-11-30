<?php
//
//$fileTest = fopen('test15', 'w');

$var = "blablablalbbla";
$htmlContent = content('https://www.it-akademy.fr/');
file_put_contents('test15', $htmlContent);
fclose($htmlContent);

