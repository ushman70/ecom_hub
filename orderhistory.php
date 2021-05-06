<?php
session_start();
require('./functions.php');
require ('quickdb2.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="./ecom.css" rel="stylesheet">
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

      <a href="index.php"><h1 class="logo">Ecomhub</h1></a>
      
    </div>
   
    
    
    <?php  
                $container = array();
   
                $query="SELECT * FROM mocart WHERE user_id=$_SESSION[user_id] AND date";
                $q= mysqli_stmt_init($con);
                mysqli_stmt_prepare($q, $query);
                mysqli_stmt_execute($q);
                $result = mysqli_stmt_get_result($q);
                $result->fetch_assoc();
              foreach($result as $key => $value){
                if (!array_key_exists($value['date'], $container)) {
                  $container[$value['date']]++;
                  
                  echo "<h1 class=\"text-white border rounded border-info bg-secondary my-2\" style=\"width: 50%;\">Order details</h1>";
                  
              }
               
        ?>
      
       
     <div class="container bg-white float-left mr-5 border rounded border-dark" style="font-family: 'Rubik', sans-serif;">
     <div class="row mr-5"> 
    <div class="col-sm mr-5 d-flex justify-content-end"  style="position: relative; right: 20em;">
    <img src="<?php echo $value['item_image'] ?>" alt="Image1" style="position: relative; left: 12em;"></li>
    <div class="col-md-2" style="position: relative; left: 20em;"><strong>Price: </strong>&nbsp;&nbsp;&nbsp;<?php echo $value['item_price']?></div>
    <br>
    <div class="col-md-2" style="position: relative; left: 20em; white-space: nowrap;"><strong>Item&nbsp;name:</strong>&nbsp;&nbsp;&nbsp;<?php echo $value['item_name']?></div>
    </div>
    <div style="position: relative; right: 15em;"><br><br><br><strong>Shipment Status:</strong>&nbsp;<?php echo $value['shipped']?></div>
    &nbsp;&nbsp;
    <div style="position: relative; right: 10em;"><br><br><br><strong>Order&nbsp;date:</strong>&nbsp;&nbsp;&nbsp;<?php echo $value['date']?>
    </div>
    <div class="col-lg-11 my-5">
    <form method="get" action="invoice.php">
      <input type="hidden" name="date" value="<?php echo $value['date']?>">
      <button class="btn btn-primary ml-5" type="submit" name="ini">Invoice</button>
    </form>
    </div>
    
  </div>
</div>
 

<?php 
      
      
      
    }   
  ?>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="ecom.js"></script>
</body>
</html>