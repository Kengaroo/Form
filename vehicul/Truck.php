<?php
require_once 'Vehicle.php';
class Truck extends Vehicle
{
    public const TRUCK_LOADED = [
        'full',
        'is filling',
    ];
    
    private int $loading = 0;

    public function __construct(private int $capacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }    

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }
    
    public function getCapacity(): int
    {
        return $this->capaciy;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }
    
    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {        
        $this->loading = $loading < $this->capacity ? $loading : $this->capacity;
    }
    
    public function isFull(): string
    {
        if ($this->loading === $this->capacity) {
            return self::TRUCK_LOADED[0];
        } else {
            return self::TRUCK_LOADED[1];
        }                                   
        return $this;
    }
}