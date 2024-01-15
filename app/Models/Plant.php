<?php

namespace App\Models;

class Plant extends Organism
{

    protected static $num_plants;

    protected function getCategory()
    {
        return 'soy Planta';
    }
}
