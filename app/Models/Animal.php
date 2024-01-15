<?php

namespace App\Models;

class Animal extends Organism
{

    protected static $num_animal;

    protected function getCategory()
    {
        return 'Animal';
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
