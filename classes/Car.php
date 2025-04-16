<?php

class Car
 {

    //properties / fields
    private $brand ;
    private $color ;
    
    //Constructor
    public function __construct($brand, $color = "none") 
    {
        $this->brand = $brand;
        $this->color = $color;
    }
    

    // Getter & setter methods

    //Getter method
    public function getBrand()
    {
        return $this->brand;
    }

    //Setter method
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

     //Getter method
     public function getcolor()
     {
         return $this->color;
     }
 
     //Setter method
     public function setcolor($color)
     {
         $this->color = $color;
     }
  
 

    //Method
    public function getCarInfo () 
    {
        return "Brand: ". $this->brand . ", Color: " . $this->color;
    }


}



