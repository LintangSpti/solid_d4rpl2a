<?php
include("Persegi.php");

class PerhitunganPersegi {
    function hitungluas (Persegi $persegi) {
        $sisi = $persegi->getSisi();
        return $sisi * $sisi;
    }
}

?>