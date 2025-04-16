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

    //Method
    public function getCarInfo () 
    {
        return "Brand: ". $this->brand . ", Color: " . $this->color;
    }


}

$car01 = new Car("Ferari", "Blue");
//acsess method / function
echo $car01->getCarInfo();
echo "<br>";
//acsess proparty
echo $car01->vehicleType;

$car02 = new Car("Volvo", "Red");

$car03 = new Car("Wolfenstain", "White");
