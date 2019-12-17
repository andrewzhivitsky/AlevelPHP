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