<?php

header('Content-type: text/plain');
require_once('DevelopedCountry.php');

$Inde = new Country("Inde", "New Dheli", 1438.07, "Asie");
$Usa = new Country("Etats-Unis", "Washington D.C", 343.48, "Amérique");
$France = new Country("France", "Paris", 66.44, "Europe");
$Madagascar = new Country("Madagascar", "Antananarivo", 31.19, "Afrique");
$NewZealand = new Country("Nouvelle-Zélande", "Wellington", 5.17, "Océanie");

// echo $Inde->getInfo();
// echo $Usa->getInfo();
// echo $France->getInfo();
// echo $Madagascar->getInfo();

// echo $Madagascar->getContinent() . "\n";
// echo $Madagascar->setContinent("Océanie");
// echo $Madagascar->getContinent() . "\n";

$countries = [$Inde, $Usa, $France, $Madagascar, $NewZealand];

// foreach($countries as $country)
// {
//     echo $country->getInfo();
// }

echo "Tableau de pays: \n\n";

foreach($countries as $country)
{
    echo $country->getInfo() . "\n";
}

$Uk = new DevelopedCountry("Royaume-Uni", "Londres", 68.35, "Europe", 3.38);

// echo "\n\n";

echo $Uk->getInfo();

echo "\n\n";

echo "Pays du tableau ayant une population supérieure à 100 millions d'habitants: \n\n";

displayPopulous($countries);

function displayPopulous($countries)
{
    foreach($countries as $country)
    {
        if($country->isPopulous())
        {
            echo $country->getName() . "\n";
        }
    }
}