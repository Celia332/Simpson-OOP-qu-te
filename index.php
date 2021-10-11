<?php

require_once 'Bicycle.php';

$bike = new Bicycle('blue', 40);
var_dump($bike);
$myBike = new Bicycle('green', 50);
var_dump($myBike);



// Moving bike

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();


//cars

require_once 'cars.php';
$car = new Car('red' , 40, 'gasolina');
var_dump($car);
$margeCar = new Car('orange', 30, 'diesel');
var_dump($margeCar);



//moving car 

echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
