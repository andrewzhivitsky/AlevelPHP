<?php

abstract class Vehicles{
    private $type;
abstract public function ride();
}

class land_vehicle extends Vehicles{
    private $car;
    private $motorbike;

public function __construct($car,$motorbike)
{
    $this->car=$car;
    $this->motorbike=$motorbike;
}

    public function ride() {
    echo "Этот транспорт передвигается по суше "; // <--- полиморфизм

}

    /**
     * @return mixed
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * @return mixed
     */
    public function getMotorbike()
    {
        return $this->motorbike;
    }

    /**
     * @param mixed $car
     */
    public function setCar($car)
    {
        $this->car = $car;
    }

    /**
     * @param mixed $motorbike
     */
    public function setMotorbike($motorbike)
    {
        $this->motorbike = $motorbike;
    }
}
class air_vehicle extends Vehicles {
    private $airplane;
    private $helicopter;
    public function __construct($airplane,$helicopter)
    {
        $this->airplane=$airplane;
        $this->helicopter=$helicopter;

    }

    public function ride() {
        echo "Этот транспорт передвигается по воздуху"; // <----- полиморфизм
}

    /**
     * @return mixed
     */
    public function getAirplane()
    {
        return $this->airplane;
    }

    /**
     * @return mixed
     */
    public function getHelicopter()
    {
        return $this->helicopter;
    }

    /**
     * @param mixed $airplane
     */
    public function setAirplane($airplane)
    {
        $this->airplane = $airplane;
    }

    /**
     * @param mixed $helicopter
     */
    public function setHelicopter($helicopter)
    {
        $this->helicopter = $helicopter;
    }
}
class water_vehicle extends Vehicles {
    private $boat;
    private $yacht;
    public function __construct($boat,$yacht)
    {
        $this->boat=$boat;
        $this->yacht=$yacht;
    }

    public function ride() {
        echo "Этот транспорт передвигается по морю!"; // <----- полиморфизм


}

    /**
     * @return mixed
     */
    public function getBoat()
    {
        return $this->boat;
    }

    /**
     * @return mixed
     */
    public function getYacht()
    {
        return $this->yacht;
    }

    /**
     * @param mixed $boat
     */
    public function setBoat($boat)
    {
        $this->boat = $boat;
    }

    /**
     * @param mixed $yacht
     */
    public function setYacht($yacht)
    {
        $this->yacht = $yacht;
    }
}
class Poli{
    public function move(Vehicles $vechicles){
        echo $vechicles->ride();
    }
}
$vechicle[]= new water_vehicle(yacht, boat);
$vechicle[]= new land_vehicle(car, motornike);
$vechicle[] = new air_vehicle(plane, helicopter);

foreach ($vechicle as $vechicles){
    if($vechicles instanceof Vehicles){
        echo get_class($vechicles) . $vechicles->ride() .PHP_EOL;
    }
}