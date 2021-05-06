<?php
 session_start();
 require('./functions.php');
 print_r($_SESSION['user_id']);
  
  
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (isset($_POST['delete-cart-submit'])){
      $deletedrecord = $Cart->deleteCart($_POST['item_id']);
  }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (isset($_POST['delete-cart-submit'])){
      $deletedrecord = $Cart->modeleteCart($_POST['item_id']);
  }
}


 
 




 
 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
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
      <a href="cart.php"><i class="fa fa-shopping-cart mr-2"  style="font-size:48px;color:white">Cart</i> 
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
     
  <div class="container-fluid" id="crt_table">
  <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>
                <?php
                $con=mysqli_connect("localhost:3308","root","","ecom_hub");
                $sel="SELECT * FROM cart WHERE user_id=$_SESSION[user_id]";
                $rs=$con->query($sel);
                while($row=$rs->fetch_assoc()){
                    
                ?>
               
                  <div class="border rounded offset-md-1" id="crt_table">
                      <div class="row bg-white pl-5">
                          <div class="col-md-3 offset-md-3 pl-0">
                              <img src="<?php echo $row['item_image'] ?>" alt="Image1" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                              <h5 class="pt-2"><?php echo $row['item_name'];?> <?php echo $thisvar = $row['size'] == 'N/A' ? '' : $row['size']; ?></h5>
                              <small class="text-secondary">Seller: ecom_hub</small>
                              <h5 class="product_price pt-2" data-id="<?php echo $row['item_id'];?>">$<?php echo $row['item_price'];?></h5>
                              
                              <form method="post" class="cart-items">
                                <input type="hidden" value="<?php echo $row['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" class="btn btn-danger" name="delete-cart-submit" id="button">Remove</button>
                                
                              </form>
                          </div>
                          <div class="col-md-3 py-5">
                            <div class="quantity">
                            <form method="post" id="frm<?php echo $row['cart_id']?>">
                            <input type="hidden" name="cart_id" value="<?php  echo $row['user_id'];?>">
                            <input type="hidden" name="item_id" value="<?php  echo $row['cart_id'];?>">
            <input type="number" name="qty" value="<?php echo $row['item_quantity']; ?>" onchange="updcart(<?php echo $row['cart_id'];  ?>)" onkeyup="updcart(<?php echo $row['cart_id'];  ?>)"style="width: 60px;">
                            
                            </form>
                            
                              
                            </div>
                              
                          </div>
                      </div>
                  </div>
                  <?php
                        }
                            
                               ?>
                               
             </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <?php?>
                    <div class="col-md-6"> Items: 
                    <?php if($product->getUserData('cart') != null){
                        $count = count($product->getUserData('cart'));
                        echo "<span id=\"cart_count\" class=\"text-dark bg-black\ style=\"font-size:32px;\">$count</span>";
                      } else {
                        echo "<span id=\"cart_count\" class=\"text-dark bg-black mr-2\" style=\"font-size:32px;\">0</span>";
                      }?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                        <br>
                        <h3>Updated cart!</h3>
                        <div>
                        <?php foreach ($product->getUserData('cart') as $item){  $cart = $product->getProduct($item['item_id']); $testTotal[] = array_map(function ($item){?>
                          <li>
                          
                            
                          <?php echo $item['item_name'];?> <?php return $item['item_name']; }, $cart);?>: Qty x<?php echo $item['item_quantity'];  }?> </li>
                          
                        </div>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        
                        <h6><span>$<span id="deal-price"><?php
                            
                            
                            $total = 0;
                            foreach($product->getUserData('cart') as $key => $value){
                             
                             $total = $total + ($value['item_quantity'] * $value['item_price']); 
                             }
                             ?>
                             <?php echo $total; ?></span></span></h6>
                            
                            <hr>
                             
                            
                            <a href="./checkout.php"><button class="btn btn-warning">Checkout</button></a>
                            
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>


            
          
        
      
    




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
<script src="ecom.js"></script>
<script>
 function updcart(id){

$.ajax({
  url:'ajaxtwo.php',
  type:'POST',
  data:$("#frm"+id).serialize(),
  success:function(res){

    $("#crt_table").html(res);
    

  }


});

}

var check = document.getElementById('check');

if(document.URL.includes('cart2.php')){
    check.style = 'font-size: 30px';
    check.style.color = '#28b463';
}

</script>

</body>
</html>
