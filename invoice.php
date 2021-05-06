<?php
session_start();
require ('./functions.php');
require ('quickdb2.php');



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="./ecom.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet"> 
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
      
    </div><?php 
      
                $date = $_GET['date'];
                
                $sel="SELECT * FROM verifiedorder WHERE user_id=$_SESSION[user_id] AND date='$date' LIMIT 1";
                $rs=$con->query($sel);
                while($row=$rs->fetch_assoc()){
                  
                    
                ?>
    <div class="bg-white"><strong>Order Number# <?php echo $row['order_id']; }?></strong></div>
   <?php $date = $_GET['date'];
                
                $sel="SELECT * FROM mo WHERE user_id=$_SESSION[user_id] AND date='$date' LIMIT 1";
                $rs=$con->query($sel);
                while($row=$rs->fetch_assoc()){ ?>
  <div class="row bg-white">
    <div class="col-sm border rounded border-dark" style="font-family: 'Dela Gothic One', cursive;">
      SHIP TO:
      <ul class="text-center" style="list-style-type: none;">
        <li>Order placed on:&nbsp;&nbsp;&nbsp;<?php echo $row['date']?></li>
        <li><?php echo $row['Name']?></li>
        <li><?php echo $row['Address']?></li>
        <li><?php echo $row['Phone']?></li>
      </ul>
    </div>
    <div class="col-sm border rounded border-dark" style="font-family: 'Dela Gothic One', cursive;">
      BILL TO:
      <ul style="list-style-type: none;">
        <li><?php echo $row['Name']?></li>
        <li><?php echo $row['Address']?></li>
        <li><?php echo $row['Phone']?></li>
      </ul>
    </div>
  </div>
    <?php }?>
    
    <?php 
      $sel="SELECT * FROM mocart WHERE user_id=$_SESSION[user_id] AND date='$date'";
      $rs=$con->query($sel);
      while($row=$rs->fetch_assoc()){
        $total = 0;
                 
        ?>
      
        <table data-toggle="table" class="bg-white">
      <thead>
        <tr>
          <th>Item Quantity</th>
          <th>Item Name</th>
          <th>Item Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="col-md-3"><?php echo $row['item_quantity']?></td>
          <td class="col-md-3"><?php echo $row['item_name']?></td>
          <td class="col-md-3"><?php echo $row['item_price']?></td>
          <?php  }?>
        </tr>
        <tr>
        <td>Taxes</td>
        <td style="background-color:LightGray;"></td>
        <td style="font-size: 20px;"><strong>0.00</strong></td>
        </tr>
        <tr>
        <td style="font-size: 30px;"><strong>Subtotal</strong></td>
        <td style="background-color:LightGray;"><?php $total = 0; $sel="SELECT * FROM mocart WHERE user_id=$_SESSION[user_id] AND date='$date'"; $rs=$con->query($sel); while($row=$rs->fetch_assoc()){ $total = $total + ($row['item_quantity'] * $row['item_price']); }?></td>
        <td style="font-size: 20px;"><strong><?php echo $total; ?></strong></td>
        </tr>
      </tbody>
    </table>
    
    
  
   






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="ecom.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
</body>
</html>