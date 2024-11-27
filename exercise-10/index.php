<?php

require_once __DIR__ . '/classes/Employee.php';

$person = new Employee("Bro", "Tato", 20, "40k", "manager");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo $person->getPersonInfo() ?></p>
    <p><?php echo $person->getEmployeeDetails() ?></p>
</body>

</html>