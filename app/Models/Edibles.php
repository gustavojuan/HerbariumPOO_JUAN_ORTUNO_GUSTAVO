<?php

namespace App\Models;

class Edibles extends Fungus
{
    public function __construct($name, $discovery_date)
    {
        parent::__construct($name, $discovery_date);
    }


}
