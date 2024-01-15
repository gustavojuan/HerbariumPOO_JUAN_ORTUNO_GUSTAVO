<?php

namespace App\Models;

class Edibles extends Fungus
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

}
