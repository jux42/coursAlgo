<?php


$nombreDePieces = 0;
do
{
    echo "combien de pieces comporte votre maison ?\n";
    $nombreDePieces = readline();

    $tab[$nombreDePieces][2] = null;


    if(!is_numeric($nombreDePieces))
    {
        echo "vous devez saisir un nombre !!\n";
    }
    elseif ($nombreDePieces>15)
    {
        echo "vous devez saisir un nombre inférieur à 15 !!\n";
    }

}while( !is_numeric($nombreDePieces) || $nombreDePieces>15);


$tableauDesPerimetres =  saisieTableau($nombreDePieces);

$superficieMaison = perimetreTotal($tableauDesPerimetres);

echo "votre maison a une superficie de " . $superficieMaison . "m²";





function saisieTableau($nombreDePieces)
{
    $tableauDesPerimetres[$nombreDePieces] = null;

    for($i=0 ; $i<$nombreDePieces ; $i++)
    {
        echo "indiquez la longueur de la pièce n°" .$i+1 . " : \n";
        $longueur = readline();
        echo "indiquez la largeur de la pièce n°" .$i+1 . " : \n";
        $largeur = readline();
        $perimetrePiece =  $longueur*$largeur;

        $tableauDesPerimetres[$i] = $perimetrePiece;
    }
    return $tableauDesPerimetres;
}


function perimetreTotal( array $listePerimetres)
{
    $somme=0;
    for ($i = 0 ; $i<count($listePerimetres) ; $i++ )
    {
        $somme += $listePerimetres[$i];
    }
    return $somme;
}
