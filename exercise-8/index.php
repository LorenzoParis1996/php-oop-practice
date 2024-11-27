<?php

require_once __DIR__ . '/classes/BankAccount.php';

$bankAccount = new BankAccount(rand(100000, 500000), rand(1000, 5000));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo $bankAccount->getAccountNumber() ?></p>
    <p><?php echo $bankAccount->getCurrentBalance() ?></p>
    <p><?php echo $bankAccount->withdrawMoney() ?></p>
    <p><?php echo $bankAccount->depositMoney() ?></p>
</body>

</html>