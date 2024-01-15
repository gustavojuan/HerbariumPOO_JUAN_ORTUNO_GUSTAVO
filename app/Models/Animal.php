<?php

namespace App\Models;

class Animal extends Organism
{

    protected static $num_animal;

    protected function getCategory()
    {
        return 'soy Animal';
    }
}
