<?php

namespace App\Models;

use App\Interfaces\Canivarora;
use App\Traits\FlyerTrait;

class Bird extends Animal implements Canivarora
{

    use FlyerTrait;
    public function __construct($name, $discovery_date)
    {
        parent::__construct($name, $discovery_date);
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
