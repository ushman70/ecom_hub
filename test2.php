<?php 

$error = array();


$connect = new PDO("mysql:host=localhost:3308;dbname=ecom_hub", "root", "");
;



$query = "
INSERT INTO test2
(user_id) 
VALUES (:user_id)
";

    $data = array(
        ":user_id" => $_POST['user_id']
        
       );
       $statement = $connect->prepare($query);
       $statement->execute($data);



?>