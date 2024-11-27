<?php

require_once __DIR__ . '/classes/Circle.php';

$circle = new Circle (10);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>Radius: <?php echo $circle->getRadius() ?></li>
        <li>Area: <?php echo $circle->calculateArea() ?></li>
        <li>Circumference <?php echo $circle->calculateCircumference() ?></li>
    </ul>
</body>

</html>