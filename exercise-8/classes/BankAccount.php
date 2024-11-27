<?php 

class BankAccount {
    public $accountNumber;
    public $balance;

    public function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function getAccountNumber() {
        return "Account number: " . $this->accountNumber;
    }

    public function getCurrentBalance() {
        return "Original balance: " . $this->balance;
    }

    public function withdrawMoney() {
        return "After withdraw: " . $this->balance - rand(500, 1000);
    }

    public function depositMoney() {
        return "After deposit :" . $this->balance + rand(500, 1000);
    }
}