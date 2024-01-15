<?php
    namespace App\Models;

abstract class Organism
{
    protected $name;
    protected $discovery_date;

    protected static $population;

    /**
     * @param $name
     * @param $discovery_date
     */
    public function __construct($name, $discovery_date)
    {
        $this->name = $name;
        $this->discovery_date = $discovery_date;
    }


    abstract protected function getCategory();


}

