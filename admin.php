<?php
session_start();
require('./functions.php');
require('./php/component.php');
require ('./quickdb.php');
if(isset($_POST['submit2'])){
  $userid = $_POST['userid'];
  $ship = $_POST['ship'];
  $date = $_POST['date'];
  $stmt = $conn->prepare("UPDATE mocart SET shipped=? WHERE user_id=? AND date=?");
        $stmt->bind_param("sis", $ship,$userid,$date);
        $stmt->execute();
}
$i=0;
print_r($_POST);

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
  </head>
  <body style="overflow:visible;">
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
              <li><a href="#">Xbox Series X</a></li>
              <li><a href="#">Nintendo Wii U</a></li>
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
    
    <?php $con=mysqli_connect("localhost:3308","root","","ecom_hub");
                $sel="SELECT * FROM mocart WHERE payment='paid' AND shipped='no' GROUP BY user_id ORDER BY date DESC";
                $rs=$con->query($sel);
                $row=$rs->fetch_assoc();
                
                ?>
    <div class="text-center">There are <?php print $rs->num_rows; ?> unshipped orders</div>
 <?php $con=mysqli_connect("localhost:3308","root","","ecom_hub");
     $results_per_page = 10;  
     $queryx1 = "SELECT * FROM mocart WHERE payment='paid'";  
     $resultx1 = mysqli_query($con, $queryx1);  
     $number_of_resultx1 = mysqli_num_rows($resultx1);
     $number_of_page = ceil ($number_of_resultx1 / $results_per_page);
     if (!isset ($_GET['page']) ) {  
      $page = 1;  
  } else {  
      $page = $_GET['page'];  
  } 
  
  $page_first_resultx1 = ($page-1) * $results_per_page;
                $selx1="SELECT * FROM mocart WHERE payment='paid' ORDER BY DATE DESC LIMIT $page_first_resultx1,$results_per_page";
                $resultx1 = mysqli_query($con, $selx1);
                while($rowt = mysqli_fetch_array($resultx1)){?>
   

               

   <?php 
   if($rowt['shipped'] == 'no' || $rowt['shipped'] == 'processing'){
    echo "<h1 class=\"text-center\" style=\"width: 100%;\">Not Shipped</h1>";
     
   }
    ?>
    
<div class="rts">
<div class="ml-5 border border-dark container d-flex flex-row" id="rmp">
  <form method="post" class="ml-5" action="fulldetails.php">
  
    <label for="order">user_id:</label>
  <input type="text" class="starRate"  name="userid" value="<?php echo $rowt['user_id']?>"><br><br>
  
  
  <label for="order">item_id:</label>
  <input type="text" id="order" name="itemid" value="<?php echo $rowt['item_id']?>"><br><br>
  
  
  <label for="order">item_quantity:</label>
  <input type="text" id="order" name="qty" value="<?php echo $rowt['item_quantity']?>"><br><br>
  
  
  <label for="order">item_price:</label>
  <input type="text" id="order" name="price" value="<?php echo $rowt['item_price']?>"><br><br>
  
  
  <label for="order">Shipment:</label>
  <input type="text" class="ship" name="ship" value="<?php echo $rowt['shipped']?>"><br><br>
  
  
  <label for="order">item_name:</label>
  <input type="text" id="order" name="itemname" value="<?php echo $rowt['item_name']?>"><br><br>
  
  
  <label for="order">date:</label>
  <input type="text" class="date"  name="date" value="<?php echo $rowt['date']?>"><br><br>
  
  
  <label for="order">payment</label>
  <input type="text" class="payment" name="payment" value="<?php echo $rowt['payment']?>"><br><br>
  <button class="my-5" type="submit" name="submit">Get all the details for this user</button>
  
  </form>
    <form method="post">
    <label for="order">user_id:</label>
  <input type="text" class="starRate"  name="userid" value="<?php echo $rowt['user_id']?>"><br><br>
  
  
  <label for="order">item_id:</label>
  <input type="text" id="order" name="itemid" value="<?php echo $rowt['item_id']?>"><br><br>
  
  
  <label for="order">item_quantity:</label>
  <input type="text" id="order" name="qty" value="<?php echo $rowt['item_quantity']?>"><br><br>
  
  
  <label for="order">item_price:</label>
  <input type="text" id="order" name="price" value="<?php echo $rowt['item_price']?>"><br><br>
  
  
  <label for="order">Shipment:</label>
  <input type="text" class="ship" name="ship" value="<?php echo $rowt['shipped']?>"><br><br>
  
  
  <label for="order">item_name:</label>
  <input type="text" id="order" name="itemname" value="<?php echo $rowt['item_name']?>"><br><br>
  
  
  <label for="order">date:</label>
  <input type="text" class="date"  name="date" value="<?php echo $rowt['date']?>"><br><br>
  
  
  <label for="order">payment</label>
  <input type="text" class="payment" name="payment" value="<?php echo $rowt['payment']?>"><br><br>
    <button class="my-5" type="submit" name="submit2">Update this order</button>
    </form>
</div>
</div>
<?php } ?>
<?php for($p = $page, $page = 1; $page<= $number_of_page; $page++) { 
         if($page == $p){
          echo '<b><a href = "admin.php?page=' . $page . '">' . $page . ' </a></b>';
       } else{
        echo '<a href = "admin.php?page=' . $page . '">' . $page . ' </a>';
       }
        
          
    }?>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="ecom.js"></script>
<script src="i-like-robots-EasyZoom-17be503/src/easyzoom.js"></script>
<script src="jquery/jquery.js"></script>
<script src="OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js"></script>
<script>
if(window.location.href == window.location.href){
     check = document.getElementById('current')
    check.style = 'font-size: 30px';
    
}

</script>
</body>
</html>
