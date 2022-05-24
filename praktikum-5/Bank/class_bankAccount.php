<?php
include_once 'class_account.php';

class BankAccount extends Account{
    public $costumer;

    function __construct($nomor, $saldo_awal, $customer)
    {
        parent::__construct($nomor, $saldo_awal);
        $this->costumer = $customer;
    }
    function cetak()
    {
        parent::cetak();
        echo '<br>Customer: ' . $this->customer;
        echo '<br>';
    }

    function transfer($akun, $uang)
    {
        $akun->deposit($uang);
        $this->withdraw($uang);
    }
}
?>