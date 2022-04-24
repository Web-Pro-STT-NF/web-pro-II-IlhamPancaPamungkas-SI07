<?php
require_once 'class_account.php';

$atm1 = new account('0133', 9000000);
$atm2 = new account('0134', 1500000);

$atm1->cetak();
$atm1->deposit(2000000);
echo '<br/>';
$atm1->cetak();

?>