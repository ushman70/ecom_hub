<?php
 session_start();
 require('./functions.php');
 
  
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
      <a href="cart.php"><i class="fa fa-shopping-cart mr-2"  style="font-size:48px;color:white">Cart</i> 
      <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getUserData('cart')); ?></span>
      </a>
      </div>
      <h1 class="logo"><a href="index.php">Ecomhub</a></h1>
      <input type="text" placeholder="Search" class="search-bar">
     
  <div class="container-fluid" id="crt_table">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>
                <?php
                
                foreach ($product->getUserData('cart') as $item){
                  $cart = $product->getProduct($item['item_id']);
                  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if (isset($_POST['inc_qty'])){
                        $increase= $Cart->increasequantity($_POST['qty'], $_POST['cart_id'], $item['item_id'], 'cart');
                    }
                  }
                  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if(isset($_POST['inc_qty'])){
                      $verify=$Cart->verifyquantity($_POST['cart_id'], $item['item_id']);
                    }
                   }
                  $subTotal[] = array_map(function($item){
                    
                ?>
               
                  <div class="border rounded offset-md-1" id="crt_table">
                      <div class="row bg-white pl-5">
                          <div class="col-md-3 offset-md-3 pl-0">
                              <img src="<?php echo $item['item_image'] ?>" alt="Image1" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                              <h5 class="pt-2"><?php echo $item['item_name'];?></h5>
                              <small class="text-secondary">Seller: dailytuition</small>
                              <h5 class="product_price pt-2" data-id="<?php echo $item['item_id'];?>">$<?php echo $item['item_price'];?></h5>
                              
                              <form method="post" class="cart-items">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" class="btn btn-danger" name="delete-cart-submit">Remove</button>
                              </form>
                          </div>
                          <div class="col-md-3 py-5">
                            <form method="post" id="frm">
                            <div class="qty">
                                  <label for="quantity"></label>
                                  <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up" ></i></button>
                                  <input type="hidden"  name="cart_id" value="<?php  echo $item['item_id'];?>">
                                  <input type="number"  class="qty_input border px-2 form-control w-25 d-inline bg-light"
                                    data-id="<?php echo $item['item_id'] ?? '0'; ?>" value="1" name="qty" id="quan">
                                    
                                    <button class="qty-down border bg-light"  data-id="<?php echo $item['item_id'] ?? '0';?>" name="dec_qty"><i class="fas fa-angle-down"></i></button>
                                 <button  name="inc_qty" id="submit">Verify Quantity!</button>
                            
                            </form>
                            
                                
                                </div>
                              
                          </div>
                      </div>
                  </div>
                  <?php
                                 return $item['item_price'];
                                }, $cart);
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
                    <?php if(isset($item['item_id'])){
                        
                        echo "<span id=\"cart_count\" class=\"text-warning bg-black\ style=\"font-size:32px;\"></span>";
                      } else {
                        echo "<span id=\"cart_count\" class=\"text-warning bg-black mr-2\" style=\"font-size:32px;\">0</span>";
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
                    <h6><?php  echo isset($subTotal) ? count($subTotal) : 0;?></h6>
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
                              <h5><strong>PLEASE NOTE:</strong> If you want to purchase more than 1
                            quantity for each item. Make sure to click the "Verify Quantity"
                            button! You must do it for each item, a message will appear over the
                            item that will state, "Quantity Verified!" above the item.
                              </h5>
                            <hr>
                            <a href="./checkout.php"><button>Proceed</button></a>
                            
                    </div>
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
</script>
</body>
</html>
