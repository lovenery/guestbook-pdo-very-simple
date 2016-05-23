<?php

//dsn
$DataSourceName = "mysql:host=localhost;dbname=PDO;charset=utf8"; // 在unix大小寫有差 //資料庫的大小寫
$dbuser = "root";
$dbpass = "";

$db = new PDO($DataSourceName, $dbuser, $dbpass);

?>
