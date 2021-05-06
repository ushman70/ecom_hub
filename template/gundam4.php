<?php
session_start();
require ('../functions.php');

if (session_id() != null && empty($_SESSION)){
    $_SESSION['user_id'] = rand(145698, 2908765);
    
   }
  
  
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      if(isset($_POST['signup'])){ 
      require ('../sign_up_process.php');
      header("Refresh:0");
      }
   
  }
  
  if($_SERVER['REQUEST_METHOD'] == "POST"){
   if(isset($_POST['login'])){ 
       require ('../login.php');
      
       
       if(password_verify($p, $row['Password'])){
         $_SESSION['user_id'] = $row['user_id'];
         $_SESSION['Name'] = $row['Name'];
         header("Refresh:0");
  
  
   
    } else {
     session_unset();
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

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['add'])){
      require ('../time handler.php');
       
    }
  }
  require ('../quickdb.php');
$keyword = 'gundam4';
$itemid = 21;
$sqlr = $conn->query("SELECT id FROM rate WHERE keyword='$keyword'");
$numR = $sqlr->num_rows;
$sqlr1 = $conn->query("SELECT userReview FROM rate WHERE keyword='$keyword' AND userReview= 1");
$sqlr2 = $conn->query("SELECT userReview FROM rate WHERE keyword='$keyword' AND userReview= 2");
$sqlr3 = $conn->query("SELECT userReview FROM rate WHERE keyword='$keyword' AND userReview= 3");
$sqlr4 = $conn->query("SELECT userReview FROM rate WHERE keyword='$keyword' AND userReview= 4");
$sqlr5 = $conn->query("SELECT userReview FROM rate WHERE keyword='$keyword' AND userReview= 5");
$numR1 = $sqlr1->num_rows;
$numR2 = $sqlr2->num_rows;
$numR3 = $sqlr3->num_rows;
$numR4 = $sqlr4->num_rows;
$numR5 = $sqlr5->num_rows;
$numR = $sqlr->num_rows;
$num = $sqlr->num_rows;


$sqlr = $conn->query("SELECT SUM(userReview) AS total FROM rate WHERE keyword='$keyword'");
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

  $time = date('m/d/Y h:i:s a', time());
  $EasternTimeStamp =mktime(date('H')-6,date('i'),date('s'),date("m"),date("d"),date("Y"));
  $time2 = date('Y/m/d H:i:s a', $EasternTimeStamp);
  $time3 = date('Y/m/d');
  
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="../ecom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="i-like-robots-EasyZoom-17be503/css/easyzoom.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&family=Ubuntu:wght@300&display=swap" rel="stylesheet"> 
    <script src="jquery/jquery.js"></script>
    <title>E-com site</title>
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
              <li><a href="./ps5.php">PS5</a></li>
              <li><a href="./ps4.php">PS4</a></li>
              <li><a href="./seriesx.php">Xbox Series X</a></li>
              <li><a href="./wii.php">Nintendo Wii U</a></li>
            </ul>
          </div>
        </li>
        <li class="Action-Figures">Action Figures
          <div class="sub-menu-2">
            <ul>
              <li><a href="./gundammodelkit.php">Gundam Model kits</a></li>
              <li><a href="./dbzfigures.php">DBZ figurines</a></li>
              <li><a href="./myhero.php">Boku No Hero figurines</a></li>
              <li><a href="./naruto.php">Naruto figurines</a></li>
            </ul>
          </div>
        </li>
        <li class="Gamer-Merch">Gamer Merch
          <div class="sub-menu-3">
            <ul>
              <li><a href="./shirts.php">Shirts</a></li>
              <li><a href="./posters.php">Posters</a></li>
              <li><a href="./mugs.php">Gamer Mug</a></li>
            </ul>
          </div>
        </li>
        <li class="Gaming-pcs">Gaming Pcs
          <div class="sub-menu-4">
            <ul>
              <li><a href="./alien.php">Alienware Aurora R11 Gaming Desktop</a></li>
              <li><a href="./corsair.php">Corsair Vengeance 6182</a></li>
              <li><a href="./trident.php">MSI Trident A Plus</a></li>
              <li><a href="./rog.php">ASUS ROG Strix GA15</a></li>
            </ul>
          </div>
        </li>
      </ul>
     
      
      <div class="text-right">
      <a href="../cart2.php"><i class="fa fa-shopping-cart mr-2"  style="font-size:48px;color:white">Cart</i> 
        
      <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getUserData('cart')); ?></span>


      </a>
      <?php if(!isset($_SESSION['Name'])){?>
      <li class="mr-5"><a href="" data-toggle="modal" data-target="#ModalLoginForm">Sign up</a> <a class="text-secondary">|</a> <a href="" data-toggle="modal" data-target="#ModalExample">Login</a></li>
      <?php } else {
  ?><br><span class="mr-5"><span class="text-white">Welcome <?php echo $_SESSION['Name']; ?> </span></span>
    <br><span class="mr-5"><span class="text-white"><a href="orderhistory.php">Order History</a></span></span>           
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



       

 <a href="../index.php"><h1 class="logo">Ecomhub</h1></a>
      <input type="text" placeholder="Search" class="search-bar">
    </div>
    <?php foreach($product->getgundam4('product') as $item){?>
    <div class="container d-flex justify-content-between">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  
  <div class="row">
  <div class="col-md-1">
<ul class="mr-5 d-flex" style="List-style-type: none;">
  <li><img class="enlarge mr-1 border border-warning" src="<?php echo $item['item_image']?>" width="150px" height="150px"/></li>
  <li><img class="enlarge border border-warning" src="<?php echo $item['item_image']?>" width="150px" height="150px"/></li>
</ul>
<ul class="mr-5 d-flex" style="List-style-type: none;">
  <li><img class="enlarge mr-1 border border-warning" src="<?php echo $item['item_image']?>" width="150px" height="150px"/></li>
  <li><img class="enlarge border border-warning" src="<?php echo $item['item_image']?>" width="150px" height="150px"/></li>
</ul>
  </div>
  </div>
    
  <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
  <div class="row">
  
    
    <div class="bg-light" style="height: 75%;"><img src="<?php echo $item['item_image']?>"/>
    <ul class="border border-dark" style="List-style-type: none;">
      <br>
      <li>Item&nbsp;price:<strong>&nbsp;$<?php echo $item['item_price']?></strong></li>
      <li>Size:&nbsp;<strong>12&nbsp;inches&nbsp;</strong></li>
      <li>Brand:&nbsp;<strong>Bandai</strong></li>
    </ul>
    </div>
  </div>
   
  
  <form class="row bg-light border border-dark text-center ml-5" style="height: 25%; position: relative; left: 50px;" method="post">
    <div class="text-danger" style="font-size: 25px; font-family: 'Roboto', sans-serif;">
      <ul class="mr-5" style="List-style-type: none;">
      <li class="text-dark" style="font-size: 18px; text-decoration: underline; "><?php print $num;?> Ratings</li>
      <li>
        <div class="tri">
          <div class="pdt-rate">
            <div class="pro-rating">
              <div class="clearfix rating marT8 ">
                <div class="rating-stars ">
                  <div class="grey-stars"></div>
                    <div class="filled-stars" style="width:<?php echo ($avg * 20) ?>%"> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                              </li>
        <li>$<?php echo $item['item_price']?></li>
        <li><button class="btn btn-dark" type="submit" name="add">Add To Cart</button></li>
        <li class="text-dark">Delivery: <a class="text-success">FREE</a></li>
        <li class="text-dark" style="font-size: 15px;"> Delivery takes about 1 week</li>
        <li><input type="hidden" name="item_id" value="<?php echo $item["item_id"]; ?>">
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']?>">
            <input type="hidden" name="qty" value="<?php echo 1; ?>">
            <input type="hidden" name="prod_price" value="<?php echo $item['item_price']; ?>">
            <input type="hidden" name="time" value="<?php echo $time2?>">
            <input type="hidden" name="image" value="<?php echo $item['item_image']?>">
            <input type="hidden" name="name" value="<?php echo $item['item_name']?>">
            <input type="hidden" name="ship" value="<?php echo 'no';?>">
            <input type="hidden" name="date" value="<?php echo $time3;?>">
            <input type="hidden" name="payment" value="unpaid">
            <input type="hidden" name="size" value="<?php echo 'N/A';?>"></li>
            <hr>
        <li class="text-dark" style="font-family: 'Roboto', sans-serif; font-size: 13px;">Shipped by: Ecom_hub</li>
        <li class="text-dark" style="font-family: 'Roboto', sans-serif; font-size: 13px;">Sold by: Ecom_hub</li>
      </ul>
    </div>
   </form>
 </div>
<div class="container d-flex justify-content-center">
  <div class="row bg-dark text-light" style="font-family: 'Ubuntu', sans-serif">The real grade mobile suit developed by 
   Zeon. The purpose of this suit was to<br> bring down Amuro Ray.
   Fortunately, Zeon failed. However you have the chance to purchase<br>
   this mobile suit for your own glory!</div>
</div>
<h1 class="text-center" style="font-family: 'Ubuntu', sans-serif">Reviews</h1>
<hr>
<?php }?>

<div class="review-modal" style="display:none">
                    <div class="review-bg"></div>
                    <div class="rmp">

                        <div class="rpc">
                            <span><i class="far fa-times"></i></span>
                        </div>
                        <div class="rps">
                            <i class="fa fa-star" data-index="0" style="display:none"></i>
                            <i class="fa fa-star" data-index="1"></i>
                            <i class="fa fa-star" data-index="2"></i>
                            <i class="fa fa-star" data-index="3"></i>
                            <i class="fa fa-star" data-index="4"></i>
                            <i class="fa fa-star" data-index="5"></i>
                        </div>
                        <input type="hidden" value="" class="starRateV">
                        <input type="hidden" value="<?php echo $time3 ?>" class="rateDate">
                        <input type="hidden" value="<?php echo $keyword?>" class="ratekeyword">
                        <input type="hidden" value="<?php echo $itemid;?>" class="itemid">
                        <div class="rptf" align="center">
                            <input type="text" class="raterName" placeholder="Enter Your Name...">
                        </div>

                        <div class="rptf" align="center">
                            <textarea name="rate-field" id="rate-field" class="rateMsg"
                                placeholder="Describe Your Experience (optional)"></textarea>
                        </div>
                        <div class="rate-error" align="center"></div>
                        <div class="rpsb" align="center">
                            <button class="rpbtn">Add Review</button>
                        </div>

                    </div>
                </div>
                <?php if($numR1 > 0 || $numR2 > 0 || $numR3 > 0 || $numR4 > 0 || $numR5 > 0){?>
                <div class="rpb">
                  <div class="rnpb" style=<?php echo $numR5;?>>
                  <label>5 <i class="fa fa-star"></i></label>
                  <div class="ropb">
                    <div class="ripb" style="width:<?php echo $numR5 / $num * 100?>%"></div>
                  </div>
                    <label>(<?php echo $numR5?>)</label>
                 </div>
                                    <div class="rnpb">
                                        <label>4 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width:<?php echo $numR4 / $num * 100?>%"></div>
                                        </div>
                                        <label>(<?php echo $numR4?>)</label>
                                    </div>
                                    <div class="rnpb">
                                        <label>3 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width:<?php echo $numR3 / $num * 100?>%"></div>
                                        </div>
                                        <label>(<?php echo $numR3?>)</label>
                                    </div>
                                    <div class="rnpb">
                                        <label>2 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width:<?php echo $numR2 / $num * 100?>%"></div>
                                        </div>
                                        <label>(<?php echo $numR2?>)</label>
                                    </div>
                                    <div class="rnpb">
                                        <label>1 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width:<?php echo $numR1 / $num * 100?>%"></div>
                                        </div>
                                        <label>(<?php echo $numR1?>)</label>
                                    </div>
                                </div>
                                <?php }?>
                                <a class="rrb"><button class="rbtn opmd">Click to leave a review!</button></a>
              
                <div class="bri">
                <div class="uscm">
                    <?php
                     require ('../quickdb.php');
                        $sqlp = "SELECT * FROM rate WHERE keyword='$keyword'";
                        $resultp = $conn -> query($sqlp);
                        if(mysqli_num_rows($resultp) > 0) {
                            while($row = $resultp -> fetch_assoc()) {
                       ?>
                    <div class="uscm-secs">
                        <div class="us-img">
                            <p><?= substr($row['Name'], 0, 1); ?></p>
                        </div>
                        <div class="uscms">
                            <div class="us-rate">
                                <div class="pdt-rate">
                                    <div class="pro-rating">
                                        <div class="clearfix rating marT8 ">
                                            <div class="rating-stars ">
                                                <div class="grey-stars"></div>
                                                <div class="filled-stars" style="width:<?= $row['userReview'] * 20 ?>%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="us-cmt">
                                <p><?= $row['userMessage'] ?></p>
                            </div>
                            <div class="us-nm">
                                <p><i> By <span class="cmnm"><?= $row['Name'] ?></span> on <span
                                            class="cmdt"><?= $row['date'] ?></span> </i></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                            }
                        }
                                
                            ?>


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
<script src="i-like-robots-EasyZoom-17be503/dist/easyzoom.js"></script>
<script src="../ecom.js"></script>
<script>
 var ratedIndex = 0;

function resetColors() {
    $(".rps  i").css("color", "#e2e2e2");
}

function setStars(max) {
    for (var i = 0; i <= max; i++) {
        $(".rps  i:eq(" + i + ")").css("color", "#f7bf17");
    }
}
$(document).ready(function () {


    resetColors();

    $(".rps  i").mouseover(function () {
        resetColors();
        var currentIndex = parseInt($(this).data("index"));
        setStars(currentIndex);
    })

    $(".rps  i").on("click", function () {
        ratedIndex = parseInt($(this).data("index"));
        localStorage.setItem("rating", ratedIndex);
        $(".starRateV").val(parseInt(localStorage.getItem("rating")));
    })
    // if a person does not click on the star then go back
    $(".rps  i").mouseleave(function () {
        resetColors();
        if (ratedIndex != -1) {
            setStars(ratedIndex);
        }
    })
    // if a person leaves the page and still comes back
    if (localStorage.getItem("rating") != null) {
        setStars(parseInt(localStorage.getItem("rating")));
        $(".starRateV").val(parseInt(localStorage.getItem("rating")));
    }

    $(".rpc i, .review-bg").click(function () {
        $(".review-modal").fadeOut();
    })
    $(".opmd").click(function () {
        
        $(".review-modal").fadeIn();
    })
    

    $(".rpbtn").on("click", function () {
               
        if ($("#rate-field").val() == '') {
            $(".rate-error").html("Please Fill In The Text Box!");
        } 
        
        else if (localStorage.getItem("rating") == null) {
            $(".rate-error").html("Please Select A Star To Rate!");
        } 
        
        else if ($(".raterName").val() == '') {
            $(".rate-error").html("Please Enter Your Name!");
        }
        else {

            $(".rate-error").html("");

            var $form = $(this).closest(".rmp");
            var starRate = $form.find(".starRateV").val();
            var rateMsg = $form.find(".rateMsg").val();
            var date = $form.find(".rateDate").val();
            var name = $form.find(".raterName").val();
            var keyword = $form.find(".ratekeyword").val();
            var itemid = $form.find(".itemid").val();

            $.ajax({
                url: "rate.php",
                type: "POST",
                data: {
                    starRate: starRate,
                    rateMsg: rateMsg,
                    date: date,
                    name: name,
                    keyword: keyword,
                    itemid: itemid
                },
                success: function (d) {
                    console.log(starRate);
                    $(".review-modal").fadeOut();
                    window.location.reload();
                }
            });
           
        }
    })
  
})

</script>
</body>
</html>
