<?php

namespace App\Models;

class Plant extends Organism
{

    protected static $num_plants = 0;

    public function __construct($name, $discovery_date)
    {
        parent::__construct($name, $discovery_date);
        self::$num_plants++;
    }


    public function getCategory()
    {
        return get_class($this);
    }

    private function updateValue($value){
        self::$num_plants+= $value;
    }

    /* GETTERS & SETTES PROPIOS*/
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function getDiscover_date()
    {
        return $this->discovery_date;
    }

    public function setDiscover_date($discover_date)
    {
        $this->discover_date = $discover_date;
    }


    public function updatePopulation($amount)
    {
        self::$num_plants+=$amount;
        /* Siempre que se acutalice podemos aumentar la poblacion de organismos aunque no se indica*/
        parent::$population+=$amount;
    }

    public static function getNumPlants(): int
    {
        return self::$num_plants;
    }



}
