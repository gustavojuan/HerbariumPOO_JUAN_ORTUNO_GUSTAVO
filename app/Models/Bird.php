<?php

namespace App\Models;

use App\Interfaces\Canivarora;

class Bird extends Animal implements Canivarora
{
    public function __construct($name, $discovery_date)
    {
        parent::__construct($name, $discovery_date);
    }

    public function __get(string $attribute)
    {
        return $this->$attribute;
    }


    public function __set(string $attribute, $value)
    {
        $this->$attribute  = $value;
    }

    public function huntPrey()
    {
        // TODO: Implement huntPrey() method.
    }

    public function feedMeat()
    {
        // TODO: Implement feedMeat() method.
    }
}
