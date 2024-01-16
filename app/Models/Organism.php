<?php
    namespace App\Models;

abstract class Organism
{
    public $name;
    public $discovery_date;
    protected static $population;

    /**
     * @param $name
     * @param $discovery_date
     */
    public function __construct($name, $discovery_date)
    {
        $this->name = $name;
        $this->discovery_date = $discovery_date;
        self::$population++;


    }


    abstract protected function getCategory();

    /*Como tenemos que tener un método en todas las hija lo forzamos hacienodlo abstratct*/
    /*Entendemos que este metodo es para multiplicar el numero de organismos*/
    abstract public function updatePopulation(int $amount);


}

