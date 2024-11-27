<?php 

require_once __DIR__ . '/classes/Rectangle.php';

$rectangle = new Rectangle (20, 40);


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
        <li>Width: <?php echo $rectangle->getWidth() ?></li>
        <li>Length: <?php echo $rectangle->getLength() ?></li>
        <li>Area: <?php echo $rectangle->calculateArea() ?></li>
        <li>Perimeter: <?php echo $rectangle->calculatePerimeter() ?></li>
    </ul>
</body>

</html>