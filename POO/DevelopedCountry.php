<?php

require_once('Country.php');

class DevelopedCountry extends Country
{
    protected $gdp;

    public function __construct($name, $capital, $population, $continent, $gdp)
    {
        $this->name = $name;
        $this->capital = $capital;
        $this->population = $population;
        $this->continent = $continent;
        $this->gdp = $gdp;
    }

    public function getInfo()
    {
        return "Le pays a pour nom " . $this->getName()
        . " , sa capitale est " . $this->getCapital()
        . " , sa population est de " . $this->getPopulation()
        . " millions d'habitants, il se trouve sur le continent " . $this->getContinent()
        . " et a un PIB de " . $this->getGdp()
        . " milliards de dollars"
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