<?php
session_start();
require ('../functions.php');
require ('../quickdb.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['add'])){
      require ('../time handler.php');
       
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="../ecom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
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
              <li><a href="#">PS4</a></li>
              <li><a href="#">Xbox Series X</a></li>
              <li><a href="#">Nintendo Wii U</a></li>
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
              <li><a href="">Alienware Aurora R11 Gaming Desktop</a></li>
              <li><a href="">Corsair Vengeance 6182</a></li>
              <li><a href="">MSI Trident A Plus</a></li>
              <li><a href="">ASUS ROG Strix GA15</a></li>
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



       

 <h1 class="logo">Ecomhub</h1>
      <input type="text" placeholder="Search" class="search-bar">
    </div>

    <div class="container">
      <div class="row text-center py-5">
      <?php
      
      $time = date('m/d/Y h:i:s a', time());
 $EasternTimeStamp =mktime(date('H')-6,date('i'),date('s'),date("m"),date("d"),date("Y"));
 $time2 = date('Y/m/d H:i:s a', $EasternTimeStamp);
 $time3 = date('Y/m/d');
      $i = 0;
      foreach($product->narutofigures('product') as $item){
        $i++;
          
        
    
      ?>
      <?php $sqlr = $conn->query("SELECT * FROM rate WHERE keyword='naruto$i'");
      $numR = $sqlr->num_rows;
      $sqlr = $conn->query("SELECT SUM(userReview) AS total FROM rate WHERE keyword='naruto$i'");
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
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
       <form method="post">
         <div class="card shadow bg-light mb-3">
           <div>
           <?php echo "<a href=\"naruto" . $i . ".php\">" ?><img src="<?php echo $item['item_image'] ?? "./UI-goku.jpg" ?>" alt="Image1" class="img-fluid card-img-top"><?php echo "</a>" ?>
           </div>
           <div class="card-body"   style="height:25%;">
             <h5 class="card-title"><?php echo $item['item_name'] ?? "unknown"?></h5>
             <h5 class="price">
               $<?php echo $item['item_price'] ?? 0?>
            </h5>
            <div class="tri text-center">
          <div class="pdt-rate">
            <div class="pro-rating">
              <div class="clearfix rating marT8 ">
                <div class="rating-stars">
                  <div class="grey-stars <?php if($numR == 0){echo '';} else{echo "text-white";}?>" style="position:relative;left:4px;">&nbsp;<a class="text-dark">(<?php print $numR?>)</a></div>
                    <div class="filled-stars <?php if($numR == 0){echo '';} else{echo "text-dark";}?>" style="width:<?php if($numR == 0){echo $avg = 0;} else { echo $avg * 20 - 10;} ?>%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
            <input type="hidden" name="item_id" value="<?php echo $item["item_id"]; ?>">
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']?>">
            <input type="hidden" name="qty" value="<?php echo 1; ?>">
            <input type="hidden" name="prod_price" value="<?php echo $item['item_price']; ?>">
            <input type="hidden" name="time" value="<?php echo $time2?>">
            <input type="hidden" name="image" value="<?php echo $item['item_image']?>">
            <input type="hidden" name="name" value="<?php echo $item['item_name']?>">
            <input type="hidden" name="ship" value="<?php echo 'no';?>">
            <input type="hidden" name="date" value="<?php echo $time3;?>">
            <input type="hidden" name="size" value="<?php echo 'N/A';?>">
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
      
      
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="ecom.js"></script>
</body>
</html>