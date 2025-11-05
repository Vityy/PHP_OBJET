<?php

require_once('Country.php');

class DevelopedCountry extends Country
{
    private $gdp;

    public function __construct($name, $capital, $population, $continent, $gdp)
    {
        parent::__construct($name, $capital, $population, $continent);
        $this->setGdp($gdp);
    }

    public function getInfo()
    {
        return "Nom: " . $this->getName()
        . ", Capitale: " . $this->getCapital()
        . ", Population: " . $this->getPopulation() . " millions d'habitants"
        . ", Continent: " . $this->getContinent()
        . ", PIB: " . $this->getGdp() . " milliards de dollars"
        . ".\n\n";
    }

    public function getGdp()
    {
        return $this->gdp;
    }

    public function setGdp($gdp)
    {
        $this->gdp = $gdp;
    }
}