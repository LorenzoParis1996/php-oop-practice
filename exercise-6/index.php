<?php 

require_once __DIR__ . '/classes/Book.php';
require_once __DIR__ . '/classes/Magazine.php';
require_once __DIR__ . '/classes/DVD.php';

$book = new Book("book");
$magazine = new Magazine("magazine");
$dvd = new DVD("dvd");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo $book->typeOfMedia() ?></p>
    <p><?php echo $magazine->typeOfMedia() ?></p>
    <p><?php echo $dvd->typeOfMedia() ?></p>
</body>

</html>