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

echo $car01->getCarInfo();
echo "<br>";
echo "vehicle type: " . $car01->vehicleType;

?>
    
</body>
</html>

