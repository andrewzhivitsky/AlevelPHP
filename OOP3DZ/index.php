<?php
spl_autoload_register('autoloader');
function autoloader($className){
    include($className . ".php");
}
$car = new LandVechicles(755,4, 70, automat);
echo "Car have ".  $car->maxSpeed() . " M/H MAX SPEED" . PHP_EOL;
echo $car->Wheelcount() . PHP_EOL;
echo "Car " . $car->engine() . " engine" . PHP_EOL;

$plane = new AirVechicles(11000,5, 23830, automat);
echo "____________________" . PHP_EOL;
echo "Boing-777 have ".  $plane->maxSpeed() . " M/H MAX SPEED" . PHP_EOL;
echo $plane->Wheelcount() . PHP_EOL;
echo "Boing-777 " . $plane->engine() . " engine" . PHP_EOL;

$boat = new WaterVechicles(1135,0, 23830, automat);
echo "____________________" . PHP_EOL;
echo "Oasis of Seas have ".  $boat->maxSpeed() . " M/H MAX SPEED" . PHP_EOL;
echo $boat->Wheelcount() . PHP_EOL;
echo "Oasis of Seas " . $boat->engine() . " engine" . PHP_EOL;
