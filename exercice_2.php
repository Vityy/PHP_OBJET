<?php

$anneesNaissance = [2010, 1994, 1957, 2017, 2003, 1998, 1930, 1918, 1945, 2023];
// $anneesNaissance = [2026, 2029];

$anneeMin = $anneesNaissance[0];
$anneeMax = $anneesNaissance[0];
$agesPairs = 0;

foreach($anneesNaissance as $anneeNaissance)
{
    if($anneeNaissance < $anneeMin)
    {
        $anneeMin = $anneeNaissance;
    }

    if($anneeNaissance > $anneeMax)
    {
        $anneeMax = $anneeNaissance;
    }

    if((2025 - $anneeNaissance) % 2 == 0)
    {
        $agesPairs++;
    }
}

echo "L'année de naissance de la personne la plus agée est: " . $anneeMin . "\n";
echo "L'année de naissance de la personne la plus jeune est: " . $anneeMax . "\n";
echo "Le nombre de personnes dont l'âge est pair est: " . $agesPairs . "\n";