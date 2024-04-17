<?php 
include_once "PerhitunganPersegi.php";

$persegi = new Persegi(9);
$penghitungpersegi = new PerhitunganPersegi();
 echo $penghitungpersegi->hitungluas($persegi);
?>