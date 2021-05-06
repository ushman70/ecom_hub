<?php
session_start();
require "./quickdb.php";


$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$POSTI = filter_var_array($_POST, FILTER_SANITIZE_NUMBER_INT);

if(isset($_POST['starRate'])){
    $userid = $_POST['starRate'];
    $ship = $_POST['ship'];
    $date = $_POST['date'];
    $stmt = $conn->prepare("UPDATE mocart SET shipped=? WHERE user_id=? AND date=?");
          $stmt->bind_param("sis", $ship,$userid,$date);
          $stmt->execute();
  }



?>