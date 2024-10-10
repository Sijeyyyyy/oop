<?php

class Vehicle{ 
    public $name;
    public $speed;
    public $mileage;
    public $fuel = "Diesel";

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;

   }
}
class Bus extends Vehicle{
}
class Car extends Vehicle{
}
$vehicle = new Vehicle ("Truck", 75, 20000);
$bus = new Bus ("Blue Bus", 40, 60000);
$car = new Car ("Toyota ae86", 120, 10000);


echo "Vehicle fuel: ". $vehicle->fuel."";
echo "Bus fuel: ". $bus->fuel."";
echo "Car fuel: ". $car->fuel."";

?>