<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle("blue");

$bike->setColor = 'blue';
print_r($bike);
$bike->setCurrentSpeed = 0;
print_r($bike); 
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle("red");
$rockrider->setColor = 'yellow';
// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle("green");
$tornado->setColor = 'black';
$tornado->forward();

echo "<br/><br/>CAR SECTION<br/>";
$car = new Car("blue" ,5, 'High');
$car->setColor = 'blue';
print_r($car);
$car->setCurrentSpeed = 0;
print_r($car); 
// Moving bike
echo $car->start(10);
echo $car->forward(20);
echo '<br> Vitesse du voitur : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du vélo : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
