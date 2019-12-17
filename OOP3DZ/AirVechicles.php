<?php
class AirVechicles extends Vehicle
{
    private $fuel;
    private $transmission;

    public function __construct($horsepower, $wheelcount, $fuel, $transmission)
    {
        parent::__construct($horsepower, $wheelcount);
        $this->fuel = $fuel;
        $this->transmission = $transmission;
    }

    public function fuel_consumption()
    {
        return $this->fuel / 10;
    }

    public function engine()
    {
        return ' have ' . $this->engine;
    }

    public function maxSpeed()
    {
        return $this->horsepower / 10;
    }

    public function Wheelcount()
    {
        return ' have' . $this->wheelcount . ' WHEELS';
    }
}


