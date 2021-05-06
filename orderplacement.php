<?php
$connect = new PDO("mysql:host=localhost:3308;dbname=ecom_hub", "root", "");
$query = "
INSERT INTO verifiedorder 
(order_id, user_id, Payment, time, date) 
VALUES (:order_id, :user_id, :Payment, :time, :date)
";
$data = array(
    ':order_id' => $_POST['orderid'],
    ':user_id' => $_POST['userid'],
    ":Payment" => $_POST['payment'],
    ":time" => $_POST['time'],
    ":date" => $_POST['date']
    
   );
   $statement = $connect->prepare($query);
   $statement->execute($data);





?>