<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
var_dump($car);
echo $car->forward();

$truck1 = new Truck(20, 'black', 2, 'unknown');
echo $truck1->forward();
echo $truck1->brake();
$truck1->setLoading(10);
echo $truck1->isFull();
var_dump($truck1);

$truck3 = new Truck(10, 'yellow', 2, 'high');
$truck3->setLoading(15);
echo $truck3->isFull();
var_dump($truck3);