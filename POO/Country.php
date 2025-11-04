<?php

class Country
{
    protected $name;
    protected $capital;
    protected $population;
    protected $continent;

    public function __construct($name, $capital, $population, $continent)
    {
        $this->name = $name;
        $this->capital = $capital;
        $this->population = $population;
        $this->continent = $continent;
    }

    public function getInfo()
    {
        return "Le pays a pour nom " . $this->getName() . " , sa capitale est " . $this->getCapital() . " , sa population est de " . $this->getPopulation() . " millions d'habitants et il se trouve sur le continent " . $this->getContinent() . ".\n\n";
    }

    public function isPopulous()
    {
        if($this->getPopulation() > 100)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCapital()
    {
        return $this->capital;
    }

    public function setCapital($capital)
    {
        $this->capital = $capital;
    }

    public function getPopulation()
    {
        return $this->population;
    }

    public function setPopulation($population)
    {
        $this->nom = $population;
    }

    public function getContinent()
    {
        return $this->continent;
    }

    public function setContinent($continent)
    {
        $this->continent = $continent;
    }
}