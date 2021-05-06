<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
require_once ('PHPMailer/PHPMailer.php');
require_once ('PHPMailer/SMTP.php');
require_once ('PHPMailer/Exception.php');
require ('./functions.php');
require ('quickdb.php');
print_r($_SESSION['user_id']);


$time3 = date('Y/m/d');
$sesh = $_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (isset($_POST['finish'])){
      require ('./orderplacement.php');
      $deleteall = $Cart->UserdeleteCart('cart');
      require ('quickdb.php');
      $imported_email = './importedemail.php';
      if(file_exists($imported_email)){
        ob_start();
        include('importedemail.php');
        $message = ob_get_clean();
      }
    
    $obtain_address = $conn->query("SELECT Email FROM mo WHERE user_id='$sesh' AND date='$time3'");
    $Data = $obtain_address->fetch_assoc();

$mail = new PHPMailer();
// SMTP Settings
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "";
$mail->Password = "";
$mail->Port = 587;
$mail->SMTPSecure = "tls";
//Email Settings
$mail->isHTML(true);
$mail->setFrom("", "Ecom_hub");
$mail->addAddress($Data['Email']);
$mail->Subject = "Your order";
$mail->CharSet="utf-8";
$mail->MsgHTML($message);
if($mail->send()){
  $response = "Email sent";
} else {
  $response = "Somethings wrong" . $mail->ErrorInfo();
}


      if($deleteall){
        header("Location: index.php");
    }
    
    $sql = $conn->prepare("UPDATE mocart SET payment='paid' WHERE user_id='$sesh' AND date='$time3'");
    $sql->execute();
    
    
  }
}











?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    
    <link href="./ecom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="bg-light">


<div class="topnav">
      <ul class="container">
        <li class="Game-Systems">Game Systems
          <div class="sub-menu-1">
            <ul>
              <li><a href="./template/ps5.php">PS5</a></li>
              <li><a href="#">PS4</a></li>
              <li><a href="#">Xbox Series X</a></li>
              <li><a href="#">Nintendo Wii U</a></li>
            </ul>
          </div>
        </li>
        <li class="Action-Figures">Action Figures
          <div class="sub-menu-2">
            <ul>
              <li><a href="#">Gundam Model kits</a></li>
              <li><a href="#">DBZ figurines</a></li>
              <li><a href="#">Boku No Hero figurines</a></li>
              <li><a href="">Naruto figurines</a></li>
            </ul>
          </div>
        </li>
        <li class="Gamer-Merch">Gamer Merch
          <div class="sub-menu-3">
            <ul>
              <li><a href="">Shirts</a></li>
              <li><a href="">Posters</a></li>
              <li><a href="">Gamer Mug</a></li>
            </ul>
          </div>
        </li>
        <li class="Gaming-pcs">Gaming Pcs
          <div class="sub-menu-4">
            <ul>
              <li><a href="">Alienware Aurora R11 Gaming Desktop</a></li>
              <li><a href="">Corsair Vengeance 6182</a></li>
              <li><a href="">MSI Trident A Plus</a></li>
              <li><a href="">ASUS ROG Strix GA15</a></li>
            </ul>
          </div>
        </li>
      </ul>
      <div class="text-right">
      <a href="cart2.php"><i class="fa fa-shopping-cart mr-2"  style="font-size:48px;color:white">Cart</i> 
        <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getUserData('cart')); ?></span>
      </a>
      </div>
      <h1 class="logo"><a href="index.php">Ecomhub</a></h1>
      <div class="container text-white">
  <div class="row"> 
    <div class="col-sm" id="check">
      Checkout
    </div> >>
    <div class="col-sm" id="pay">
      Payment&nbsp;and&nbsp;Billing
    </div> >>
    <div class="col-sm" id="sub">
      Order&nbsp;Submission
    </div>
  </div>
</div>
      <input type="text" placeholder="Search" class="search-bar">
    
    
    
     
    <div class="text-center bg-white text-success" style="font-size: 30px;">You're Almost Done!!</div>
    <div class="row bg-white">
  <div class="col-md-12 text-success text-center">Just click the button to finish and verify your order!</div>
    <form method='post' class="col-md-12 ml-5 bg-white">
      <a href="index.php"><button class="btn btn-warning px-3 py-3 mb-5" style="font-size: 25px;" type="submit" name="finish">Finish your order!</button></a>
  <div class="col-md-10 offset-md-1 border-dark border">
    <h2>Payment Confirmation: <a class="text-success">Approved!</a></h2>
    <?php
     $randorderid = "OaU" . rand(145698, 2908765);
     if(empty($_SESSION['order_id'])){
      $_SESSION['order_id'] = $randorderid; 
     }
     if($_SESSION['user_id'] >= 145698){
       $_SESSION['member'] = 'No';
     } else {
       $_SESSION['member'] = 'Yes';
     }
     $time3 = date('Y/m/d');
     $EasternTimeStamp =mktime(date('H')-6,date('i'),date('s'),date("m"),date("d"),date("Y"));
     $time2 = date('Y/m/d H:i:s a', $EasternTimeStamp);
     $total = 0;
     foreach($product->getUserData('cart') as $key =>$value){ 
     $total = $total + ($value['item_quantity'] * $value['item_price']); }?>
    <h2>Amount Payed: $<?php echo $total;?></h2>
    <h2>Ecomhub OrderID: <?php echo $_SESSION['order_id']?></h2>
    <?php if($_SESSION['user_id'] >= 145698){?>
      <h2 class="bg-white">Ecomhub Member: <a class="text-danger bg-white"><?php echo $_SESSION['member']?></a></h2>
      <?php } else {?>
        <h2 class="bg-white">Ecomhub Member: <a class="text-success bg-white"><?php echo $_SESSION['member']?></a></h2>
      <?php }?>
      <input type="hidden" name="orderid" value="<?php echo $_SESSION['order_id']?>">
      <input type="hidden" name="userid" value="<?php echo $_SESSION['user_id']?>">
      <input type="hidden" name="payment" value="Approved">
      <input type="hidden" name="time" value="<?php echo $time2?>">
      <input type="hidden" name="date" value="<?php echo $time3?>">
      </form>
  </div>
</div>
<div class="row bg-white">
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="ecom.js"></script>
<script>
  var sub = document.getElementById('sub');

if(document.URL.includes('finishorder.php')){
    sub.style.color = '#28b463';
}
</script>
</body>
</html>