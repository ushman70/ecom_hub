<?php
session_start();
require "../quickdb.php";

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$POSTI = filter_var_array($_POST, FILTER_SANITIZE_NUMBER_INT);
print_r($_POST);


if(isset($POST['starRate'])) {

    
  
    $starRate = mysqli_real_escape_string($conn, $POSTI['starRate'] ?? "");
    $rateMsg = mysqli_real_escape_string($conn, $POST['rateMsg'] ?? "");
    $date = mysqli_real_escape_string($conn, $POST['date'] ?? "");
    $useName = mysqli_real_escape_string($conn, $POST['name'] ?? "");
    $keyword = mysqli_real_escape_string($conn, $POST['keyword'] ?? "");
    $itemid = mysqli_real_escape_string($conn, $POSTI['itemid'] ?? "");

    $sql = $conn->prepare("SELECT * from rate WHERE Name=?");
    $sql->bind_param("s", $useName);
    $sql->execute();
    $res = $sql->get_result();
    $rst = $res->fetch_assoc();
    $pCode = $rst['Name'];

    if(!$pCode) {
        $stmt = $conn->prepare("INSERT INTO rate (Name, userReview, userMessage, date, keyword,item_id) VALUES ( ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $useName, $starRate, $rateMsg, $date, $keyword, $itemid);
        $stmt->execute();
           
    } else {
        $stmt = $conn->prepare("INSERT INTO rate (Name, userReview, userMessage, date, keyword,item_id) VALUES ( ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $useName, $starRate, $rateMsg, $date, $keyword, $itemid);
        $stmt->execute();
    }
    
}

?>