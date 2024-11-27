<?php

require_once __DIR__ . '/classes/Vehicle.php';

$vehicleOne = new Vehicle("Ford", "Fiesta", "1996");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo $vehicleOne->displayProperties() ?></p>
</body>

</html>