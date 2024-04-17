<?php 
include_once "Mysql.php";
include_once "MongoDB.php";

$dbms = new Mysql();
$dbms->createConnection();
$dbms = new MongoDB();
$dbms->createConnection();