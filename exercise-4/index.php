<?php 

require_once __DIR__ . '/classes/Square.php';

$square = new Square(5);
$square->resize(3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Square's initial side length: <?php echo $square->getSide() / 3 ?></p>
    <p>Square's side length after resizing: <?php echo $square->getSide() ?></p>
</body>

</html>