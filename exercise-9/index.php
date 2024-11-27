<?php 

require_once __DIR__ . '/classes/Dog.php';
require_once __DIR__ . '/classes/Cat.php';
require_once __DIR__ . '/classes/Bird.php';

$dog = new Dog("beef", "woof");
$cat = new Cat("fish", "meow");
$bird = new Bird("seeds", "chirp");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <p><?php echo $dog->eat() ?></p>
        <p><?php echo $dog->makeSound() ?></p>
    </div>
    <div>
        <p><?php echo $cat->eat() ?></p>
        <p><?php echo $cat->makeSound() ?></p>
    </div>
    <div>
        <p><?php echo $bird->eat() ?></p>
        <p><?php echo $bird->makeSound() ?></p>
    </div>
</body>

</html>