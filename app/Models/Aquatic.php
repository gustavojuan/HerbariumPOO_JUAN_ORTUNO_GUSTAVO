<?php

namespace App\Models;

class Aquatic extends Plant
{

    public function __construct($name, $discovery_date)
    {
        parent::__construct($name, $discovery_date);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCategory()
    {
        return parent::getCategory();
    }


}
