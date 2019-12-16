<?php
class airVechicles extends Vehicle
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
$plane = new airVechicles(11000,5, 23830, automat);
echo "____________________" . PHP_EOL;
echo "Boing-777 have ".  $plane->maxSpeed() . " M/H MAX SPEED" . PHP_EOL;
echo $plane->Wheelcount() . PHP_EOL;
echo "Boing-777 " . $plane->engine() . " engine" . PHP_EOL;

