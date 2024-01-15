<?php

namespace App\Models;

class Plant extends Organism
{

    protected static $num_plants;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    protected function getCategory()
    {
        return get_class($this);
    }

    /**
     * @return mixed
     */
    public static function getNumPlants()
    {
        return self::$num_plants;
    }




}
