<?php
class landVechicles extends Vehicle
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
