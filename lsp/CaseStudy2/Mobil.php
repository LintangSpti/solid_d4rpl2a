<?php
include ("KendaraanBBM.php");

class Mobil extends KendaraanBBM{
    public function menggunakanBBM(): void {
        echo "mobil menggunakan bahan bakar bensin/solar .\n";
    }
}
?>