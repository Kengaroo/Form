<?php
final class ResidentialWay extends HighWay 
{
    public function __construct() {
        parent::__construct(2, 50);
    }

    public function addVehicle(Vehicle $vehicle) :string
    {        
        $this->currentVehicles[] = $vehicle;
            $this->currentVehicles = array_unique($this->currentVehicles);
            return get_class($vehicle) . " was added to " . get_class($this) . "<br/>";
    }
}