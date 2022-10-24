<?php
include_once 'Car.php';

$bmw = new Car('green', 4, 'electric');
try {
    echo $bmw->start();
} catch (Exception $e) {
    echo $e->getMessage();       
} finally {
    echo '<br/>Ma voiture roule comme un donut';
}

echo '<br/>Value of Park brake is '. ($bmw->getParkBrake() ? 'true' : 'false');