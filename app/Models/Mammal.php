<?php

namespace App\Models;

use App\Interfaces\Canivarora;
use App\Traits\SwimmerTrait;

class Mammal extends Animal implements Canivarora
{

    use SwimmerTrait;
    public function __construct($name, $discovery_date)
    {
        parent::__construct($name, $discovery_date);
    }


    public function huntPrey()
    {
        return  "huntPrey from ".get_class($this);
    }

    public function feedMeat()
    {
        return  "feedMeat from ".get_class($this);
    }


}
