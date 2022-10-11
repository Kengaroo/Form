<?php
include_once 'HighWay.php';
include_once 'ResidentialWay.php';
include_once 'PedestrianWay.php';
include_once 'MotorWay.php';
//include_once 'Vehicle.php';
include_once 'Car.php';
include_once 'Bike.php';
include_once 'Skateboard.php';


$motoWay1 = new MotorWay();
echo "Number of lanes on motorway is ". $motoWay1->getNbLane() . "<br/>";

$pedestrianWay1 = new PedestrianWay();
$residentialWay1 = new ResidentialWay();

$bmw = new Car('green', 4, 'electric');
$bike = new Bike('blue', 1);

echo $pedestrianWay1->addVehicle($bmw);
echo $residentialWay1->addVehicle($bike);