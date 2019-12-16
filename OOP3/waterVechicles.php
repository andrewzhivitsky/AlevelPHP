<?php


class  waterVechicles extends Vehicle
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
        return $this->horsepower / 1000;
    }

    public function Wheelcount()
    {
        return ' have' . $this->wheelcount . ' WHEELS';
    }
}
$boat = new waterVechicles(1135,0, 23830, automat);
echo "____________________" . PHP_EOL;
echo "Oasis of Seas have ".  $boat->maxSpeed() . " M/H MAX SPEED" . PHP_EOL;
echo $boat->Wheelcount() . PHP_EOL;
echo "Oasis of Seas " . $boat->engine() . " engine" . PHP_EOL;


