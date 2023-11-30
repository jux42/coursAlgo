<?php

//
//$fileTest = fopen('test15', 'w');

$scrapPage = 'itaka.html';
$destFile = 'liens.csv';

//récupère le contenu la page à scraper
$fichier = file_get_contents($scrapPage);
//récupère tous les liens de la page avec cette regex
preg_match_all("#(https?://[\w./?&%:;=-]+)#is", $fichier, $out);
//notre retour (les liens de la page qu'on sauvera dans le txt)
$liens_de_la_page = '';
//on explore tous les liens un par un
foreach($out[0] as $lien){
    //on retourne le lien en faisant un saut de ligne pour placer la prochaine url en dessous
    //remarque: le saut de ligne fonctionne seulement avec les double guillemets et ne fonctionnera pas avec des simple, ex : '\n'
    $liens_de_la_page .= "$lien\n";

}
//en fin on colle les liens dans un fichier texte avec le même nom que la page qui vient d'être scannée
file_put_contents($destFile, $liens_de_la_page);
echo "OK, fichier <a href='$destFile'>$destFile</a> créé<br/>";


