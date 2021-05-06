<?php

session_start();
 require('./functions.php');
 require('./php/component.php');
 require ('./quickdb.php');
 require ('quickdb2.php');
 error_reporting(0);
 ini_set('display_errors', 0);
 


 
 if (session_id() != null && empty($_SESSION)){
  $_SESSION['user_id'] = rand(145698, 2908765);
  
 }

 if(!$_SESSION['phantom_id']){
  $_SESSION['phantom_id'] = $_SESSION['user_id'];
  
}

  
  
  require ('mocartrowchecker.php');
  if(mysqli_num_rows($result) >= 1 && $_SESSION['user_id'] >=145698){
      session_unset();
      header("Refresh:0");
      $_SESSION['user_id'] = rand(145698, 2908765);
      
  }
 

  $user = array();
 if($_SERVER['REQUEST_METHOD'] == "POST"){
  if (isset($_POST['add'])){
    require ('time handler.php');
     
  }
}


if($_SERVER['REQUEST_METHOD'] == "POST"){
     if(isset($_POST['signup'])){ 
     require ('sign_up_process.php');
     header("Refresh:0");
     }
  
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(isset($_POST['login'])){ 
      require ('login.php');
     
      
      if(password_verify($p, $row['Password'])){
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['Name'] = $row['Name'];
        $sesh=$_SESSION['phantom_id'];
        $seshu = $_SESSION['user_id'];
        $sqlr = $con->query("SELECT * FROM cart WHERE user_id='$sesh'");
        $numR = $sqlr->num_rows;
        $query4 = "DELETE FROM cart WHERE user_id='$sesh'";
        if($numR > 0) {
            $query2 = "SELECT * FROM cart WHERE user_id='$sesh'";
            $rs=$con->query($query2);
            while($row=$rs->fetch_assoc()){
              $rowitemid = $row['item_id'];
              $item_quantity = $row['item_quantity'];
              $item_price = $row['item_price'];
              $item_time = $row['time'];
              $item_shipped = $row['shipped'];
              $item_image = $row['item_image'];
              $item_name = $row['item_name'];
              $item_date = $row['date'];
              $item_size = $row['size'];
              $item_payment = $row['payment'];
              $query3 = "
INSERT INTO `cart`
(user_id, item_id, item_quantity, item_price, time, shipped, item_image, item_name, date, size, payment)
VALUES ('$seshu', '$rowitemid', '$item_quantity', '$item_price', '$item_time', '$item_shipped', '$item_image', '$item_name', '$item_date', '$item_size', '$item_payment')";
              $statement = $connect->query($query3);
              $statement = $connect->query($query4);
              
              
            }
            
            
              
          }

        


  
   } else {
    session_unset();
    echo '<script>alert("You wrong password")</script>';
    header("Refresh:0");
    
   
    
  }  
 }
}

  
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(isset($_POST['logout'])){ 
  session_destroy();
  header("Refresh:0");
  }

}






$time3 = date('Y/m/d');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="./ecom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css" />
    <title>E-com site</title>
    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 500px) {
  .text {font-size: 11px}
}

</style>
  </head>
  <body>
  <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Collapsed content</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="dropdown" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

    <div class="topnav">
      <ul class="container">
        <li class="Game-Systems">Game Systems
          <div class="sub-menu-1">
            <ul>
              <li><a href="./template/ps5.php">PS5</a></li>
              <li><a href="#">PS4</a></li>
              <li><a href="./template/xboxseriesx.php">Xbox Series X</a></li>
              <li><a href="./template/nintendowiiu.php">Nintendo Wii U</a></li>
            </ul>
          </div>
        </li>
        <li class="Action-Figures">Action Figures
          <div class="sub-menu-2">
            <ul>
              <li><a href="./template/gundammodelkit.php">Gundam Model kits</a></li>
              <li><a href="./template/dbzfigures.php">DBZ figurines</a></li>
              <li><a href="./template/myhero.php">Boku No Hero figurines</a></li>
              <li><a href="./template/naruto.php">Naruto figurines</a></li>
            </ul>
          </div>
        </li>
        <li class="Gamer-Merch">Gamer Merch
          <div class="sub-menu-3">
            <ul>
              <li><a href="./template/shirts.php">Shirts</a></li>
              <li><a href="./template/posters.php">Posters</a></li>
              <li><a href="./template/mugs.php">Gamer Mug</a></li>
            </ul>
          </div>
        </li>
        <li class="Gaming-pcs">Gaming Pcs
          <div class="sub-menu-4">
            <ul>
              <li><a href="./template/Alienware.php">Alienware Aurora R11 Gaming Desktop</a></li>
              <li><a href="./template/Corsair.php">Corsair Vengeance 6182</a></li>
              <li><a href="./template/Trident.php">MSI Trident A Plus</a></li>
              <li><a href="./template/ASUS.php">ASUS ROG Strix GA15</a></li>
            </ul>
          </div>
        </li>
      </ul>
     
      
      <div class="text-right">
      <a href="cart2.php"><i class="fa fa-shopping-cart mr-2"  style="font-size:48px;color:white">Cart</i> 
        
      <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getUserData('cart')); ?></span>


      </a>
      <?php if(!isset($_SESSION['Name'])){?>
      <li class="mr-5"><a href="" data-toggle="modal" data-target="#ModalLoginForm">Sign up</a> <a class="text-secondary">|</a> <a href="" data-toggle="modal" data-target="#ModalExample">Login</a></li>
      <?php } else {
  ?><br><span class="mr-5"><span class="text-white">Welcome <?php echo $_SESSION['Name']; ?> </span></span>
    <br><span class="mr-5"><span class="text-white"><a href="orderhistory.php">Order History</a></span></span>           
    <?php if($_SESSION['user_id'] == 41){?>
      <br><span class="mr-5"><span class="text-white"><a href="admin.php">Admin Panel</a></span></span>
      <?php }?>
    <form method="post" class="mr-2"><input type="submit" href="" name="logout" value="log out" class="text-white btn btn-dark float-right"></form>
            <?php }?>
        
      </div>
      
      <!-- Modal HTML Markup -->
<!-- Modal HTML Markup -->
<div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign Up</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" onsubmit="return vali();">
                    <div class="form-group container">
                    <label class="control-label">Name</label>
                        <div class="ml-5">
                            <input type="text" required name="name"class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group container">
                        <label class="control-label">Email Address</label>
                        <div class="mr-1">
                          <input type="email" required name="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-group container">
                        <label class="control-label ">Password</label>
                        <div class="ml-4">
                            <input type="password" required name="password" id="pass" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="form-group container">
                        <label class="control-label">Con Password</label>
                        <div class="mr-1">
                            <input type="password" required name="cpass" id="cpass" name="cpass"class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" name="signup" class="btn btn-info">Sign Up!</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-xs-center">
              
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="ModalExample" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log in </h4>
            </div>
            <div class="modal-body">
                <form role="form" method="POST">
                    
                    <div class="form-group container">
                        <label class="control-label">E-Mail Address</label>
                        <div class="mr-1">
                            <input type="email" class="form-control input-lg" name="lemail">
                        </div>
                    </div>
                    <div class="form-group container">
                        <label class="control-label">Password</label>
                        <div class="ml-4">
                            <input type="password" name="lpass" class="form-control input-lg">
                        </div>
                    </div>
                    <div class="form-group container">
                        <div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group container">
                        <div> 
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <button type="submit" name="login" class="btn btn-info">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-xs-center">
              
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



       

 <h1 class="logo">Ecomhub</h1>
      <input type="text" placeholder="Search" class="search-bar">
    </div>
    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/dbzfront.jpg" style="width:100%" height="800px">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/ASUS-ROG.jpg" style="width:100%" height="800px">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="template/img/gundam f911.jpg" style="width:100%" width="500px" height="800px">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
    <?php
     divider();
    ?>
    <div id="hot-deals">
      <h1 class="text-center">Best Sellers!</h1>
      <hr>
    </div>
      <div class="container">
      <div class="row text-center py-5">
      <?php
      
      $time = date('m/d/Y h:i:s a', time());
 $EasternTimeStamp =mktime(date('H')-6,date('i'),date('s'),date("m"),date("d"),date("Y"));
 $time2 = date('Y/m/d H:i:s a', $EasternTimeStamp);
      $i = 0;
      foreach($product->bestDeals('product') as $item){
        $i++;
          
        
    
      ?>
      <div class="col-md-3 col-sm-6 my-3 my-md-0" id="image">
       <form method="post">
         <div class="card shadow bg-light mb-3">
           <div>
           <?php echo "<a href=\"item" . $i . ".php\">" ?><img src="<?php echo $item['item_image'] ?? "./UI-goku.jpg" ?>" alt="Image1" class="img-fluid card-img-top"><?php echo "</a>" ?>
           </div>
           <div class="card-body"   style="height:25%;">
             <h5 class="card-title"><?php echo $item['item_name'] ?? "unknown"?></h5>
             <h5 class="price">
               $<?php echo $item['item_price'] ?? 0?>
            </h5>
            <input type="hidden" name="item_id" value="<?php echo $item["item_id"]; ?>">
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']?>">
            <input type="hidden" name="qty" value="<?php echo 1; ?>">
            <input type="hidden" name="prod_price" value="<?php echo $item['item_price']; ?>">
            <input type="hidden" name="time" value="<?php echo $time2?>">
            <input type="hidden" name="image" value="<?php echo $item['item_image']?>">
            <input type="hidden" name="name" value="<?php echo $item['item_name']?>">
            <input type="hidden" name="ship" value="<?php echo 'no';?>">
            <input type="hidden" name="date" value="<?php echo $time3;?>">
            <input type="hidden" name="size" value="<?php 'N/A'?>">
            <input type="hidden" name="payment" value="unpaid">
            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
           </div>
          </div>
        </form>
        <?php
          
    
       }
    
    
        ?>
       </div>
       </div>
       </div>
     
       <div class="d-flex justify-content-center">
         <img class="border border-dark" src="img/nugundam.jpg" width="550x;" height="250px;" id="gun1"/>
         <img class="border border-dark" src="img/GameGroupID_824.png" width="550px;" height="250px;" id="gun2"/>
       </div>
       <div class="d-flex justify-content-center" id="gun2">
         <img class="border border-dark" src="img/darkgundam.webp" width="550px;" height="250px;" id="gun3"/>
         <img class="border border-dark" src="img/wz.jpg" width="550px;" height="250px;"  id="gun4"/>
       </div>
       <div class="text-center">
       <br>
       <br>
       <hr>
       <br>
       <br>
         <h2 style="font-family: 'Ubuntu', sans-serif;">
           Ecomhub brings the latest gaming and anime products to your doorstep! 
         </h2>
         <p style="font-family: 'Ubuntu', sans-serif;"> So what do you like?
        Do you want a cool figurine? Perhaps the most advanced hardware for your gaming needs?
        We have it.<br> We have it at the best price and <strong>no one</strong> can beat us! Don't
        believe us? Take a quick look below!
        </p>
        <img src="img/spikegun.jpg" id="spike"/>
        <br>
        <br>
        <br>
        <h1 style="text-decoration: underline;">New arrivals!</h1>
       </div>
       
       <div class="owl-carousel owl-theme text-center" style="font-family: ubuntu;" id="caro">
       <div class="item">
         <?php 
                $rand = rand(20, 61);
                
                $sel="SELECT * FROM product WHERE item_id='$rand'";
                $rs=$con->query($sel);
                $row=$rs->fetch_assoc();
                $sqlr = $conn->query("SELECT id FROM rate WHERE item_id='$rand'");
                $numR = $sqlr->num_rows;
                $sqlr = $conn->query("SELECT SUM(userReview) AS total FROM rate WHERE item_id='$rand'");
                $rData = $sqlr->fetch_array();
                $total = $rData['total'];
                $avg = '';
               if($numR != 0) {
               if(is_nan(round(($total / $numR), 1))) {
               $avg = 0;
                 }
                else {
               $avg = round(($total / $numR), 1);
                 }
                }
               else {
               $avg = 0;
               }
                ?>
          <h4><?php echo $row['item_name']?></h4>
          <ul style="list-style-type: none;">
            <li><img src="<?php echo $row['item_image']?>"/></li>
            <li>$<?php echo $row['item_price']?></li>
            <li><div class="tri">
          <div class="pdt-rate">
            <div class="pro-rating">
              <div class="clearfix rating marT8 ">
                <div class="rating-stars ">
                  <div class="grey-stars <?php if($numR == 0){echo '';} else{echo "text-white";}?>">&nbsp;<a class="<?php if($numR == 0){echo 'text-dark';} else{echo "text-dark";}?>">(<?php print $numR?>)</a></div>
                    <div class="filled-stars" style="width:<?php if($numR == 0){echo $avg = 0;} else { echo $avg * 20 - 15;}  ?>%"></div>
                </div>
              </div>
            </div>
          </div>
        </div></li>
            </ul>
        </div>
        <div class="item">
         <?php 
                $rand = rand(20, 61);
               
                $sel="SELECT * FROM product WHERE item_id='$rand'";
                $rs=$con->query($sel);
                $row=$rs->fetch_assoc();
                $sqlr = $conn->query("SELECT id FROM rate WHERE item_id='$rand'");
                $numR = $sqlr->num_rows;
                $sqlr = $conn->query("SELECT SUM(userReview) AS total FROM rate WHERE item_id='$rand'");
                $rData = $sqlr->fetch_array();
                $total = $rData['total'];
                $avg = '';
               if($numR != 0) {
               if(is_nan(round(($total / $numR), 1))) {
               $avg = 0;
                 }
                else {
               $avg = round(($total / $numR), 1);
                 }
                }
               else {
               $avg = 0;
               }
                ?>
          <h4><?php echo $row['item_name']?></h4>
          <ul style="list-style-type: none;">
            <li><img src="<?php echo $row['item_image']?>"/></li>
            <li>$<?php echo $row['item_price']?></li>
            <li><div class="tri">
          <div class="pdt-rate">
            <div class="pro-rating">
              <div class="clearfix rating marT8 ">
                <div class="rating-stars ">
                  <div class="grey-stars <?php if($numR == 0){echo '';} else{echo "text-white";}?>">&nbsp;<a class="<?php if($numR == 0){echo 'text-dark';} else{echo "text-dark";}?>">(<?php print $numR?>)</a></div>
                    <div class="filled-stars" style="width:<?php if($numR == 0){echo $avg = 0;} else { echo $avg * 20 - 15;} ?>%"></div>
                </div>
              </div>
            </div>
          </div>
        </div></li>
            </ul>
        </div>
        <div class="item">
         <?php 
                $rand = rand(20, 61);
                
                $sel="SELECT * FROM product WHERE item_id='$rand'";
                $rs=$con->query($sel);
                $row=$rs->fetch_assoc();
                $sqlr = $conn->query("SELECT id FROM rate WHERE item_id='$rand'");
                $numR = $sqlr->num_rows;
                $sqlr = $conn->query("SELECT SUM(userReview) AS total FROM rate WHERE item_id='$rand'");
                $rData = $sqlr->fetch_array();
                $total = $rData['total'];
                $avg = '';
               if($numR != 0) {
               if(is_nan(round(($total / $numR), 1))) {
               $avg = 0;
                 }
                else {
               $avg = round(($total / $numR), 1);
                 }
                }
               else {
               $avg = 0;
               }
                ?>
          <h4><?php echo $row['item_name']?></h4>
          <ul style="list-style-type: none;">
            <li><img src="<?php echo $row['item_image']?>"/></li>
            <li>$<?php echo $row['item_price']?></li>
            <li><div class="tri">
          <div class="pdt-rate">
            <div class="pro-rating">
              <div class="clearfix rating marT8 ">
                <div class="rating-stars ">
                  <div class="grey-stars <?php if($numR == 0){echo '';} else{echo "text-white";}?>">&nbsp;<a class="text-dark">(<?php print $numR?>)</a></div>
                    <div class="filled-stars" style="width:<?php if($numR == 0){echo $avg = 0;} else { echo $avg * 20 - 15;} ?>%"> </div>
                </div>
              </div>
            </div>
          </div>
        </div></li>
            </ul>
        </div>
        <div class="item">
         <?php 
                $rand = rand(20, 61);
                
                $sel="SELECT * FROM product WHERE item_id='$rand'";
                $rs=$con->query($sel);
                $row=$rs->fetch_assoc();
                $sqlr = $conn->query("SELECT id FROM rate WHERE item_id='$rand'");
                $numR = $sqlr->num_rows;
                $sqlr = $conn->query("SELECT SUM(userReview) AS total FROM rate WHERE item_id='$rand'");
                $rData = $sqlr->fetch_array();
                $total = $rData['total'];
                $avg = '';
               if($numR != 0) {
                if(is_nan(round(($total / $numR), 1))) {
                  $avg1 = 0;
                  }
                 else {
                $avg = $total / $numR;
                  }
                }
               else {
               $avg = 0;
               }
               
                ?>
          <h4><?php echo $row['item_name']?></h4>
          <ul style="list-style-type: none;">
            <li><img src="<?php echo $row['item_image']?>"/></li>
            <li>$<?php echo $row['item_price']?></li>
            <li><div class="tri">
          <div class="pdt-rate">
            <div class="pro-rating">
              <div class="clearfix rating marT8 ">
                <div class="rating-stars ">
                  <div class="grey-stars <?php if($numR == 0){echo '';} else{echo "text-white";}?>">&nbsp;<a class="text-dark">(<?php print $numR?>)</a></div>
                    <div class="filled-stars" style="width:<?php if($numR == 0){echo $avg = 0;} else { echo $avg * 20 - 15;}  ?>"></div>
                </div>
              </div>
            </div>
          </div>
        </div></li>
            </ul>
        </div>
        <div class="item">
         <?php 
                $rand = 5;
                
                $sel="SELECT * FROM product WHERE item_id='$rand'";
                $rs=$con->query($sel);
                $row=$rs->fetch_assoc();
                $sqlr = $conn->query("SELECT id FROM rate WHERE item_id='$rand'");
                $numR = $sqlr->num_rows;
                $sqlr = $conn->query("SELECT SUM(userReview) AS total FROM rate WHERE item_id='$rand'");
                $rData = $sqlr->fetch_array();
                $total = $rData['total'];
                $avg = '';
               if($numR != 0) {
               if(is_nan(round(($total / $numR), 1))) {
               $avg = 0;
                 }
                else {
               $avg = round(($total / $numR), 1);
                 }
                }
               else {
               $avg = 0;
               }
                
                ?>
          <h4><?php echo $row['item_name']?></h4>
          <ul style="list-style-type: none;">
            <li><img src="<?php echo $row['item_image']?>"/></li>
            <li>$<?php echo $row['item_price']?></li>
            <li><div class="tri">
          <div class="pdt-rate">
            <div class="pro-rating">
              <div class="clearfix rating marT8 ">
                <div class="rating-stars ">
                  <div class="grey-stars <?php if($numR == 0){echo '';} else{echo "text-white";}?>">&nbsp;<a class="text-dark">(<?php print $numR?>)</a></div>
                    <div class="filled-stars" style="width:<?php if($numR == 0){echo $avg = 0;} else { echo $avg * 20 -15;}  ?>%"> </div>
                </div>
              </div>
            </div>
          </div>
        </div></li>
            </ul>
        </div>
       </div>
    <div class="w-bg">
      <div class="d-flex justify-content-between">
        <a href="./template/naruto.php"><img src="img/narutofront.jpg" class="shine border border-dark" id="narutofront"/></a>
        <a href="./template/dbzfigures.php"><img src="img/dbzfront.jpg" width="368px" height="250px" class="shine border border-dark" id="narutofront"/></a>
      </div>
      <div class="d-flex justify-content-between">
      <figcaption class="ml-5" style="font-family: ubuntu;"><strong>Check out the latest naruto figures!</strong></figcaption>
      <figcaption class="mr-5" style="font-family: ubuntu;"><strong>Check out the latest DBZ figures!</strong></figcaption>
      </div>
      <div class="d-flex justify-content-between">
      <hr style="" id="firsthr">
      <hr style="" id="secondhr">
      </div>
      <div class="d-flex justify-content-between">
        <hr style="width:10%;text-align:left;margin-right:62em;background-color:#000000;">
        <hr style="width:10%;text-align:right;background-color:#000000;">
      </div>
      <div class="d-flex justify-content-between">
        <hr style="width:3%;text-align:left;margin-right:67em;background-color:#000000;">
        <hr style="width:3%;text-align:right;background-color:#000000;">
      </div>
      <hr>
      <div class="text-center">
        <a href="./template/myhero.php"><img src="img/boku.webp" height="250px" width="368px" class="shine border border-dark" id="narutofront"/></a>
        <figcaption style="font-family: ubuntu;"><strong>Check out the latest boku no hero figures!</strong></figcaption>
        <ul style="list-style-type:none;margin-right:2em;">
          <li><hr style="width:16%;background-color:#000000;"></li>
          <li><hr style="width:10%;background-color:#000000;"></li>
          <li><hr style="width:3%;background-color:#000000;"></li>
        </ul>
      </div>
      <hr>
      <div class="d-flex justify-content-between">
        <a href="./template/gundammodelkit.php"><img src="img/gundamfront.jpg" height="250px" width="368px" class="shine border border-dark" id="narutofront"/></a>
        <img src="img/gamingfront.jpg" height="250px" width="368px" class="shine border border-dark" id="narutofront"/>
      </div>
      <div class="d-flex justify-content-between">
      <figcaption class="ml-5" style="font-family: ubuntu;" id="fixtext"><strong>Check out the latest gundam model kits!</strong></figcaption>
      <figcaption class="mr-5" style="font-family: ubuntu;" id="fixtext2"><strong>Check out some cool misc stuff!</strong></figcaption>
      </div>
      <div class="d-flex justify-content-between">
        <hr style="width:16%;text-align:left;margin-right:58em;background-color:#000000;">
        <hr style="width:16%;text-align:right;background-color:#000000;">
      </div>
      <div class="d-flex justify-content-between">
        <hr style="width:10%;text-align:left;margin-right:62em;background-color:#000000;">
        <hr style="width:10%;text-align:right;background-color:#000000;">
      </div>
      <div class="d-flex justify-content-between">
        <hr style="width:3%;text-align:left;margin-right:67em;background-color:#000000;">
        <hr style="width:3%;text-align:right;background-color:#000000;">
      </div>
    </div>
      

       <footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">Ecomhub</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Newslatter</h4>
                <form class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email *">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                </div>
            </div>
        </div>
    </div>
</footer>
  
      
       
      
    
  
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="ecom.js"></script>
<script>
  function vali(){
    var pass=document.getElementById("pass").value;
    var cpass=document.getElementById("cpass").value;
    if(pass!=cpass){
      alert("Confirmed password is invalid");
      return false;
    }
  } 
</script>
<script src="i-like-robots-EasyZoom-17be503/src/easyzoom.js"></script>
<script src="jquery/jquery.js"></script>
<script src="OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});


$('.shine').hover(function(){
  $(this).fadeIn(1500);
  $(this).fadeOut(1500);
  $(this).fadeIn(1500);
  
  
})
 



});

</script>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>
