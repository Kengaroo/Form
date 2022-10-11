<?php
final class MotorWay extends HighWay
{
    public function __construct() {
        parent::__construct(4, 130);
    }

    public function addVehicle(Vehicle $vehicle) :string
    {
        if (!($vehicle instanceof Bike) && !($vehicle instanceof  Skateboard)) {        
            $this->currentVehicles[] = $vehicle;
            $this->currentVehicles = array_unique($this->currentVehicles);
            return get_class($vehicle) . ' was added.<br/>';
        } else {
            return "Error: couldn't add " . get_class($vehicle) . " to " . get_class($this) . "<br/>";
        }
    }
}