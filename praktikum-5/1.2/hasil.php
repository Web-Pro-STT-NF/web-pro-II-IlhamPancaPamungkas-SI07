<?php
require_once 'class_dispenser.php';

$beli1 = new Dispenser('milo', 200, 5000);
$beli1->isi(100);
$beli1->transaksi(10000);
$beli1->cetak();
?>