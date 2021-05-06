<?php


$servername = "localhost:3308";
$dBusername = "root";
$dBpassword = "";
$dBname = "ecom_hub";

$conn = mysqli_connect($servername, $dBusername, $dBpassword, $dBname);

if(!$conn) {
    die("Connection To Database Failed: ".mysql_connect_error());
}


?>