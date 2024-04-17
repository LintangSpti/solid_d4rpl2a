<?php 
include_once "Shape3Dimension.php";
include_once "Shape2Dimension.php";

class Kubus implements Shape2Dimension, Shape3Dimension{
    public Function calculateArea(): void{
        echo "Calculate Area Kubus<br>";
    }
    public function calculateVolume(): void{
        echo "Calculate Volume Kubus<br>";
    }
}
?>