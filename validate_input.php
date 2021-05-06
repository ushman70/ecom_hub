<?php 
$error = array();

function validate_input_text($textValue){
    if(!empty($textValue)){
        $trim_text= trim($textValue);
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
        return $sanitize_str;
    }
    
}

function validate_input_email($email_value){
    if(!empty($email_value)){
        $trim_text = trim($email_value);
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
        return $sanitize_str;
    }
    
}

function validate_input_phone($phone_value){
    if(!empty($phone_value)){
        $trim_text= trim($phone_value);
        $sanitize_str = filter_var($phone_value, FILTER_SANITIZE_STRING);
        $sanitize_str = str_replace("-", "", $sanitize_str);
        if (strlen($sanitize_str) < 10 || strlen($sanitize_str) > 11) {

            echo "Invalid Number <br>";
            
            } else {
            
                $sanitize_str = filter_var($phone_value, FILTER_SANITIZE_STRING);
                return $sanitize_str;
            
            }
    }
    
}

function shipping_text($textValue){
    if(!empty($textValue)){
        $trim_text= trim($textValue);
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
        return $sanitize_str;
    }
   
}


$n = validate_input_text($_POST['name']);
if(empty($name)){
    $error[] = "You must enter your name";
}

$e = validate_input_email($_POST['email']);
if(empty($email)){
    $error[] = "You must enter your email";
}

$p = validate_input_phone($_POST['phone']);
if(empty($phone)){
    $error[] = "You must enter your phone";
}

$a = validate_input_text($_POST['sa']);
if(empty($address)){
    $error[] = "You must enter your address";
}

$connect = new PDO("mysql:host=localhost:3308;dbname=ecom_hub", "root", "");
;
$query2 = "INSERT INTO `mocart` SELECT * FROM `cart` WHERE `user_id`=$_SESSION[user_id]";
$query = "
INSERT INTO mo 
(Name, Address, Phone, Email, user_id, time, date) 
VALUES (:Name, :Address, :Phone, :Email, :user_id, :time, :date)
";
if($_POST['email'] == $e && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $data = array(
        ':Name' => $n,
        ':Address' => $a,
        ":Phone" => $p,
        ":Email" => $e,
        ":user_id" => $_POST['user_id'],
        ":time" => $_POST['time'],
        ":date" => $_POST['date']
       );
       $statement = $connect->prepare($query);
       $statement->execute($data);
}
$rdy = $connect->prepare($query2);
$rdy->execute();







?>