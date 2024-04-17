<?php
include_once "PrinterFlagsip.php";
include_once "PrinterEntryLevel.php";
include_once "PrinterMidRange.php";

$printerflagship = new PrinterFlagsip();
$printerflagship->cetakKertas();
$printerflagship->terimaFax();
$printerflagship->scanKertas();

$printerentrylevel = new PrinterEntryLevel();
$printerentrylevel->cetakKertas();

$printermidrange = new PrinterMidRange();
$printermidrange->cetakKertas();
$printermidrange->scanKertas();
?>