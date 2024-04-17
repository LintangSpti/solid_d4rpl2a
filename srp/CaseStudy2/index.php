<?php
include_once "ViewMahasiswa.php";

$mahasiswa = new Mahasiswa(2205016, 'lintang');
$mahasiswaView = new ViewMahasiswa();
echo "nim :" .$mahasiswa ->getNim();
echo "<br>";
echo "nama :" .$mahasiswa -> getNama();
?>
