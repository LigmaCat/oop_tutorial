<?php

class Car
 {

    //properties / fields
    private $brand ;
    private $color ;
    public $vehicleType = "car";
    
    //Constructor

    public function __construct($brand, $color = "none") 
    {
        $this->brand = $brand;
        $this->color = $color;
    }

}

$car01 = new Car("Ferari", "Blue");
echo $car01->vehicleType;
$car02 = new Car("Volvo", "Red");
$car03 = new Car("Wolfenstain", "White");
