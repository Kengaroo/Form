<?php
//class pour vehicul differents
class Car 
    {
    private int $nbWheels = 4;
    private int $currentSpeed;
    private int $nbSeats;
    private int $energyLevel = 3;
    private string $color;
    private string $energy;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
    }
    
    public function start(int $startSpeed = 15) : string
    {
        $this->currentSpeed = $startSpeed;
        return "<br/>Go !<br/>";
    }  

    public function forward(int $addSpeed = 15): string
    {
        $this->currentSpeed += $addSpeed;
        return "Go faster!<br/>";
    }

    public function brake(int $stepBrake = 1) : string
    {                
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= $stepBrake;
            $sentence .= "Brake !!!<br/>";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }   

    public function getNbWheels () : int
    {
        return $this->nbWheels;
    }

    public function setNbWheels (int $nbWheels) : void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getColor () : string
    {
        return $this->color;
    }

    public function setColor (string $color) : void
    {
        $this->color = $color;
    }

    public function getNbSeats () : int
    {
        return $this->nbSeats;
    }

    public function setNbSeats (int $nbSeats) : void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getEnergy () : string
    {
        return $this->energy;
    }

    public function setEnergy (string $energy) : void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel () : int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel (int $energyLevel) : void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getCurrentSpeed () : int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed (int $speed) : void
    {
        $this->currentSpeed = $speed;
    }


}