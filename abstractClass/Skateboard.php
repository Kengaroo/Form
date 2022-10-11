<?php
require_once 'Vehicle.php';
class Scateboard extends Vehicle
{
    protected int $nbSeats = 0;
    public function forward(): string
    {
        $this->currentSpeed = 5;
        return "Go !";
    }
}