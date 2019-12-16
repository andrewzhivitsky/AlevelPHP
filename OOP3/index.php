<?php
spl_autoload_register('autoloader');
function autoloader($className){
    include($className . ".php");
}
$car = new landVechicles(755,4, 70, automat);
$boat = new waterVechicles(1135,0, 23830, automat);
$plane = new airVechicles(11000,5, 23830, automat);
