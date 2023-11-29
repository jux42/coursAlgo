<?php

$salaire = 0;
$montantProjet = 0;
$dureePret = 0;

do {
    echo "merci de saisir votre salaire : \n";
    $salaire = readline();
    echo "veuillez saisir le montant de votre projet : \n";
    $montantProjet = readline();
    echo "Quelle est la durée envisagée de votre projet :";
    $dureePret = readline();

}while(!is_numeric($salaire) || !is_numeric($montantProjet ) || $dureePret >25 || $dureePret < 5);

$mensualite = $salaire / 3;
echo "vos mensualités pourront s'élever à " . $mensualite . " maximum.\n";
$capaciteClient = capaciteEmprunt($dureePret, $mensualite);
capaciteTheorique($mensualite);


if ($capaciteClient < $montantProjet)
{
    echo "Vous ne possédez pas les fond nécessaires pour votre projet.";
} else {
    echo "Félicitations, vous êtes éligibles à votre financement !";
}



/*++++++++++++++++++++++++++++++++++++*/


function capaciteEmprunt($dureePret, $mensualite)
{
    $capacite = $mensualite * 12 * $dureePret;
    return $capacite;
}

function capaciteTheorique($mensualite): void
{

    for($i=5 ; $i<=25 ; $i+=5 )
    {
        $capacite = $mensualite * 12 * $i;
        echo "pour ". $i . "années, vous pouvez emprunter jusqu'à ". $capacite .".\n";
    }

}