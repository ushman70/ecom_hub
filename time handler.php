<?php 

$error = array();


$connect = new PDO("mysql:host=localhost:3308;dbname=ecom_hub", "root", "");
;



$query = "
INSERT INTO cart
(user_id, item_id, item_quantity, item_price, time, shipped, item_image, item_name, date, size, payment) 
VALUES (:user_id, :item_id, :item_quantity, :item_price, :time, :shipped, :item_image, :item_name, :date, :size, :payment)
";

    $data = array(
        ":user_id" => $_POST['user_id'],
        ":item_id" => $_POST['item_id'],
        ":item_quantity" => $_POST['qty'],
        ":item_price" => $_POST['prod_price'],
        ":time" => $_POST['time'],
        ":shipped" => $_POST['ship'],
        ":item_image" => $_POST['image'],
        ":item_name" => $_POST['name'],
        ":date" => $_POST['date'],
        ":size" => $_POST['size'],
        ":payment" => $_POST['payment']
       );
       $statement = $connect->prepare($query);
       $statement->execute($data);



?>