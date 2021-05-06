<?php
session_start();
$date = date('Y/m/d');



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
     
      
      <div class="text-center">

      <a href="index.php" class="text-center"><h1 class="logo text-dark text-center">Ecomhub</h1></a>
      
    </div>
    <h2 class="text-center"><strong>Your Order</strong></h2>
    <?php
      require ('quickdb2.php');
      $sel="SELECT * FROM mocart WHERE user_id=$_SESSION[user_id] AND date='$date'";
      $rs=$con->query($sel);
      while($row=$rs->fetch_assoc()){
          $itemname = $row['item_name'];
        $total = 0;
         if(strlen($itemname) > 10) {
         $sub = substr($itemname, 0, -4);
        
         }       
        ?>
      
        <div class="bg-white text-center">
      <thead>
        <tr>
          <th> Quantity &nbsp;</th>
          <th> Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
          <th> Price &nbsp;</th>
        </tr>
      </thead>
      <div style="">
        <tr class=""> 
          <td class="col-md-3 d"><?php echo $row['item_quantity']?>&nbsp;&nbsp;&nbsp;</td>
          <td class="col-md-3"><?php echo $thisvar = strlen($itemname) > 10 ? substr($itemname, 0, -7) . '....' : $itemname;?></td>
          <td class="col-md-3"><?php echo $row['item_price']?></td>
          <?php  }?>
        </tr>
        <br>
        <tr>
        <td>Taxes</td>
        <td style="background-color:LightGray;"></td>
        <td style="font-size: 20px;"><strong>0.00</strong></td>
        </tr>
        <br>
        <tr>
        <td style="font-size: 30px;"><strong>Subtotal</strong></td>
        <td style="background-color:LightGray;"><?php $total = 0; $sel="SELECT * FROM mocart WHERE user_id=$_SESSION[user_id] AND date='$date'"; $rs=$con->query($sel); while($row=$rs->fetch_assoc()){ $total = $total + ($row['item_quantity'] * $row['item_price']); }?></td>
        <td style="font-size: 20px;"><strong><?php echo $total;  ?></strong></td>
        </tr>
      </div>
    </div>
    
    
  
   






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