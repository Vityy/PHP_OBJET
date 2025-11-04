<?php

// $anneeNaissanceUser = intval(readline("Rentrez votre année de naissance: "));
// $anneeActuelle = 2025;

// $ageUser = $anneeActuelle - $anneeNaissanceUser;

// echo "Vous avez " . $ageUser . " ans\n";

// Si l'âge de l'individu est pair, l'informer
// if($ageUser % 2 == 0)
// {
//     echo "Votre age est pair\n";
// }

// Afficher si il est mineur ou majeur
// if($ageUser >= 18)
// {
//     echo "Vous êtes majeur\n";
// }
// else
// {
//     echo "Vous êtes mineur\n";
// }

// Afficher les 3 années qui viennent après celle de l'utilisateur

// for($i = 1; $i <= 3; $i++)
// {
//     echo $anneeNaissanceUser + $i . "\n";
// }

// Afficher la liste des dates de naissance contenus dans une variable $years;

$years = [1994, 1995, 1996, 1997, 1998, 1999, 2000, 2001, 2002, 2003, 2004];

foreach($years as $year)
{
    echo $year . "\n";
}

?>