<?php 
include_once "FiturCetak.php";

class PrinterEntryLevel implements FiturCetak{
    public function cetakKertas(): void{
        "Mencetak Kertas<br>";
    }
}
?>