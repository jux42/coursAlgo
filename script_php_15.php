<?php
//
//$fileTest = fopen('test15', 'w');

$fileHtml = fopen('itaka.html', 'w');
$textHtml = "https://fr.wikipedia.org/wiki/Malbolge";
$htmlContent = file_get_contents($textHtml);
echo $htmlContent;

fputs($fileHtml, $htmlContent);
fclose($fileHtml);

