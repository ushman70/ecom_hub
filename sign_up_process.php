<?php 
require ('quickdb2.php');
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






$n = validate_input_text($_POST['name']);
if(empty($n)){
    $error = "You must enter your name";
    echo '<script>alert("You must enter your name")</script>'; 
}

$e = validate_input_email($_POST['email']);
if(empty($e)){
    $error = "You must enter your email";
    echo '<script>alert("You must enter your email")</script>'; 
}

$p = validate_input_text($_POST['password']);
if(empty($p)){
    $error = "You must enter your password";
    echo '<script>alert("You must enter your password")</script>'; 
}
$hashed_pass = password_hash($p, PASSWORD_DEFAULT);



$connect = new PDO("mysql:host=localhost:3308;dbname=ecom_hub", "root", "");
;
$query2 = "SELECT * FROM user WHERE Email='$e'";
$selectrecords = $connect->prepare($query2);
$selectrecords->execute();
$checkrecords = $selectrecords->rowCount();
if($checkrecords == 0){
$query = "
INSERT INTO user 
(Name, Password, Email) 
VALUES (:Name, :Password, :Email)
";
if($_POST['email'] == $e && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $data = array(
        ':Name' => $n,
        ':Password' => $hashed_pass,
        ":Email" => $e
        );
       $statement = $connect->prepare($query);
       $statement->execute($data);
       $result = $statement->rowCount();
       if($result == 1){
           
           $_SESSION['user_id'] = $connect->lastInsertId();
           if(empty($error)){
            
            $query ="SELECT user_id, Password, Name FROM user WHERE email=?";
            $q= mysqli_stmt_init($con);
            mysqli_stmt_prepare($q, $query);
            mysqli_stmt_bind_param($q, 's', $e);
            mysqli_stmt_execute($q);
            $result = mysqli_stmt_get_result($q);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if(!empty($row)){
                $_SESSION['Name'] = $row['Name'];
                
            }
        }  
           
       } 
       
 }
} else {
    echo '<script>alert("This email is registered")</script>'; 
}







?>