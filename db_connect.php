<?php

$serverName = "localhost";
$userName = "admin";
$passWord = "SQLadmin@2022";
$db_name = "cswg_db";

try {
    $con = new PDO("mysql:host=$serverName;dbname=$db_name", $userName, $passWord);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection Failed : ". $e->getMessage();
}
?>