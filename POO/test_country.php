<?php

header('Content-type: text/plain');
require_once('Country.php');
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

foreach($countries as $country)
{
    echo $country->getInfo();
}

$Uk = new DevelopedCountry("Royaume-Uni", "Londres", 68.35, "Europe", 3.38);

echo $Uk->getInfo();