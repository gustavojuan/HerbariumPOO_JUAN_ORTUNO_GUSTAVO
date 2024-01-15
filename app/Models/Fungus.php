<?php

namespace App\Models;

class Fungus extends Organism
{

    protected static $num_fungus;

    protected function getCategory()
    {
        return 'soy Fungus';
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
