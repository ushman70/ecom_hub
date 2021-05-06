<?php 
  session_start();
  $error = array();
  require ('quickdb2.php');
  $connect = new PDO("mysql:host=localhost:3308;dbname=ecom_hub", "root", "");
;
  

  function validate_input_text($textValue){
      if(!empty($textValue)){
          $con = mysqli_connect('localhost:3308', 'root', '', 'ecom_hub');
          $trim_text= trim($textValue);
          $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
          $fully_sanitize_str = mysqli_real_escape_string($con, $sanitize_str ?? "");
          return $fully_sanitize_str;
      } 
      
  }
  
  function validate_input_email($email_value){
      if(!empty($email_value)){
          $con = mysqli_connect('localhost:3308', 'root', '', 'ecom_hub');
          $trim_text = trim($email_value);
          $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
          $fully_sanitize_str = mysqli_real_escape_string($con, $sanitize_str ?? "");
          return $fully_sanitize_str;
      }
      
  }

  $e = validate_input_email($_POST['lemail']);
if(empty($e)){
    $error[] = "You must enter your email";
    echo '<script>alert("You must enter your email")</script>'; 
}

$p = validate_input_text($_POST['lpass']);
if(empty($p)){
    $error[] = "You must enter your password";
   echo '<script>alert("You must enter your password")</script>';
}


if(empty($error)){
    $query ="SELECT user_id, Password, Name FROM user WHERE email=?";
    $q= mysqli_stmt_init($con);
    mysqli_stmt_prepare($q, $query);
    mysqli_stmt_bind_param($q, 's', $e);
    mysqli_stmt_execute($q);
    $result = mysqli_stmt_get_result($q);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    } else {
            
        echo '<script>alert("You wrong password")</script>';
           
        
    }
    if(!empty($row)){
        if(password_verify($p, $row['Password'])){
            
            
         }
          } 

  





?>