<?php
abstract class HighWay 
{
protected $currentVehicles = [];
protected $nbLane;
protected $maxSpeed;  

    public function __construct(int $nbLane, int $maxSpeed) 
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function setNbLane(int $nbLane) :void
    {
        $this->nbLane = $nbLane;
    }

    public function getNbLane() :int
    {
        return $this->nbLane;
    }

    public function setMaxSpeed(int $maxSpeed) :void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getMaxSpeed() :int
    {
        return $this->maxSpeed;
    }

    public function setCurrentVehicles(array $currentVehicles) :void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getCurrentVehicles() :array
    {
        return $this->currentVehicles;
    }

    abstract function addVehicle(Vehicle $vehicle);
}