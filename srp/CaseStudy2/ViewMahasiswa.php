<?php 
include("Mahasiswa.php");

class ViewMahasiswa {
    public function showMahasiswa(Mahasiswa $mhs){
        echo "NIM :" . $mhs->getNim() . $mhs->getNama() . "\n";
    }
}