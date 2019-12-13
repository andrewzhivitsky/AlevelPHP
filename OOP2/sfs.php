<?php
abstract class Vehicle
{
    protected $horsepower;
    protected $wheelcount;

    abstract public function engine();
    abstract public function maxSpeed();
   abstract public function wheelcount();
    abstract public function fuel_consumption();


    public function __construct($horsepower, $wheelcount)
    {
        $this->horsepower = $horsepower;
        $this->wheelcount = $wheelcount;

    }

}
class Land_vehicle extends Vehicle
{
    private $fuel;
    private $transmission;
    public function __construct( $horsepower, $wheelcount ,$fuel, $transmission)
    {
        parent::__construct( $horsepower, $wheelcount);
        $this->fuel=$fuel;
        $this->transmission=$transmission;
    }
    public function fuel_consumption()
    {
        return $this->fuel / 10;
    }
    public function engine()
    {
        return ' have ' . $this->engine ;
    }
    public function maxSpeed()
    {
       return  $this->horsepower / 10;
    }
    public function Wheelcount()
    {
        return ' have' . $this->wheelcount . ' WHEELS';
    }

    /**
     * @return mixed
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * @return mixed
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * @param mixed $fuel
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }

    /**
     * @param mixed $transmission
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
    }

    /**
     * @return mixed
     */
    public function getHorsepower()
    {
        return $this->horsepower;
    }

    /**
     * @param mixed $horsepower
     */
    public function setHorsepower($horsepower)
    {
        $this->horsepower = $horsepower;
    }


}
$car = new land_vehicle(755,4, 70, automat);
echo "Car have ".  $car->maxSpeed() . " M/H MAX SPEED" . PHP_EOL;
echo $car->Wheelcount() . PHP_EOL;
echo "Car " . $car->engine() . " engine" . PHP_EOL;

class Air_vehicles extends Vehicle
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
$plane = new Air_vehicles(11000,5, 23830, automat);
echo "____________________" . PHP_EOL;
echo "Boing-777 have ".  $plane->maxSpeed() . " M/H MAX SPEED" . PHP_EOL;
echo $plane->Wheelcount() . PHP_EOL;
echo "Boing-777 " . $plane->engine() . " engine" . PHP_EOL;

class  Water_vehicles extends Vehicle
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
$boat = new Water_vehicles(1135,0, 23830, automat);
echo "____________________" . PHP_EOL;
echo "Oasis of Seas have ".  $boat->maxSpeed() . " M/H MAX SPEED" . PHP_EOL;
echo $boat->Wheelcount() . PHP_EOL;
echo "Oasis of Seas " . $boat->engine() . " engine" . PHP_EOL;


