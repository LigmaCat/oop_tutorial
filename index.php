<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require_once 'Classes/car.php';

$car01 = new Car("Ferari", "Blue");

$car01->setcolor("Green");

echo $car01->getcolor();

echo "<br>";

echo $car01->getBrand(); 

$car01->setBrand("BMX");

echo "<br>";

echo $car01->getBrand(); 



?>
    
</body>
</html>

