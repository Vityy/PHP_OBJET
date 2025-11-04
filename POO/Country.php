<?php

class Country
{
    protected $name;
    protected $capital;
    protected $population;
    protected $continent;

    function __construct($name, $capital, $population, $continent)
    {
        $this->name = $name;
        $this->capital = $capital;
        $this->population = $population;
        $this->continent = $continent;
    }

    function getInfo()
    {
        return "Le pays a pour nom " . $this->name . " , sa capitale est " . $this->capital . " , sa population est de " . $this->population . " millions d'habitants et il se trouve sur le continent " . $this->continent . ".\n\n";
    }
}