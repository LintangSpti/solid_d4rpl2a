<?php

include_once "DBMS.php";
class Mysql implements DBMS{
    public function createConnection(): void{
        echo "koneksi MySQL<br>";
    }
}
?>