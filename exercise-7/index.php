<?php

require_once __DIR__ . '/classes/Student.php';

$student = new Student("Alex", 9, 10);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo $student->displayStudent() ?></p>
</body>

</html>