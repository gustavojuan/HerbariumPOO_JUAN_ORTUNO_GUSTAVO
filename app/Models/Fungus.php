<?php

namespace App\Models;

class Fungus extends Organism
{

    protected static $num_fungus;

    protected function getCategory()
    {
        return 'Fungus';
    }


    public function __get(string $attribute)
    {
        return $this->$attribute;
    }


    public function __set(string $attribute, $value)
    {
        $this->$attribute = $value;
    }


    public function updatePopulation(int $amount)
    {
        self::$num_fungus += $amount;
        /* Siempre que se acutalice podemos aumentar la poblacion de organismos aunque no se indica*/
        parent::$population += $amount;
    }
}
