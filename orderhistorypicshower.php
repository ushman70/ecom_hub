<?php
session_start();
$sesh = $_SESSION['user_id'];
$con = new mysqli('localhost:3308', 'root', '', 'ecom_hub');
$query = "SELECT * FROM mocart WHERE user_id='$sesh' AND date=";
$q= mysqli_stmt_init($con);
mysqli_stmt_prepare($q, $query);
mysqli_stmt_execute($q);
$result = mysqli_stmt_get_result($q);

?>