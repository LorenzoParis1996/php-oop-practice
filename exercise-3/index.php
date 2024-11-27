<?php

require_once __DIR__ . '/classes/Rectangle.php';
require_once __DIR__ . '/classes/Triangle.php';

$rectangle = new Rectangle(5,10);
$triangle = new Triangle(5,10);

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
        <p>Rectangle</p>
        <li>Width: <?php echo $rectangle->getWidth() ?></li>
        <li>Length: <?php echo $rectangle->getLength() ?></li>
        <li>Area: <?php echo $rectangle->calculateArea() ?></li>
    </ul>
    <ul>
        <p>Triangle</p>
        <li>Base: <?php echo $triangle->getBase() ?></li>
        <li>Height: <?php echo $triangle->getHeight() ?></li>
        <li>Area: <?php echo $triangle->calculateArea() ?></li>
    </ul>
</body>

</html>