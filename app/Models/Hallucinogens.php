<?php

namespace App\Models;

class Hallucinogens extends Fungus
{
    public function __construct($name, $discovery_date)
    {
        parent::__construct($name, $discovery_date);
    }


}
