<?php

namespace App\Models;

use App\Interfaces\Herbivore;

use App\Traits\ClimberTrait;

class Arboreal extends Plant implements Herbivore
{

    use ClimberTrait;

    public function __construct($name, $discovery_date)
    {
        parent::__construct($name, $discovery_date);
    }


    public function searchVegetables()
    {
        // TODO: Implement searchVegetables() method.
    }

    public function feedPlants()
    {
        // TODO: Implement feedPlants() method.
    }
}
