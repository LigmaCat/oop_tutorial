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



