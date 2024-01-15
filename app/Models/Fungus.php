<?php

namespace App\Models;

class Fungus extends Organism
{

    protected static $num_fungus;

    protected function getCategory()
    {
        return 'soy Fungus';
    }
}
