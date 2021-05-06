<?php
session_start();
require ('./functions.php');


if(isset($_POST['add'])){
  require ('validate_input.php');
}
$product->getUserData('cart');
$pro = $product->getUserData('cart');

 
$EasternTimeStamp =mktime(date('H')-6,date('i'),date('s'),date("m"),date("d"),date("Y"));
 $time2 = date('Y/m/d H:i:s a', $EasternTimeStamp);
 $time3 = date('Y/m/d');
 ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    
    <link href="./ecom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="bg-light" id="checkbody">

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
      
      <div class="container">
  <div class="row">
    <div class="col">
    <form method='post' id="frm2" class="text-white">
   
   <p>Name<p>
   <p><input type="text" name="name" style="width: 25em;"></p>
   
   <p>Email</p>
   <p><input type="text" name="email" style="width: 25em;"></p>
   <p>Phone</p>
   <p><input type="text" name="phone" style="width: 25em;"></p>
   <p>Shipping Address<p>
   <p><input type="text" name="sa" style="width: 25em;"></p>
   <?php foreach($product->getUserData('cart') as $item){?>
   <input type="hidden" name="user_id" value="<?php echo $item['user_id']?>">
   <input type="hidden" name="time" value="<?php echo $time2; ?>">
   <input type="hidden" name="date" value="<?php echo $time3; ?>">
   <?php }?>
   <button type="submit" name="add" class="btn btn-warning">Proceed To Payment</button>
  </form>
    </div>
    <div class="col-order-12 border rounded bg-white mt-5">
      <h1 id="finisher">Your Cart</h1>
      <hr>
      <div>
      <?php foreach ($product->getUserData('cart') as $item){?>
                          <li id="allitems">
                          
                            
                          <?php echo $item['item_name'];?> : Qty x<?php echo $item['item_quantity'];  }?> </li>
      </div>                     
                          <hr>
        <h6 class="">Delivery Charges:<span class="text-success">&nbsp;FREE</span> </h6>
        <hr>
        <h6><span>Grand Total: $<span id="deal-price"><?php
                            
                            
                            $total = 0;
                            foreach($product->getUserData('cart') as $key => $value){
                             
                             $total = $total + ($value['item_quantity'] * $value['item_price']); 
                             }
                             ?>
                             <?php echo $total ?></span></span></h6>
       
                             <div id="paypal-payment-button">
      
                             </div>
                             <div id="loading">
                               <img id="loading-image" alt="Loading..." />
                             </div>           
    </div>
    
  </div>
</div>
<?php
if (isset($_POST['add']))
{   
?>

<script src="https://www.paypal.com/sdk/js?client-id=AW8eHMluw6riEjVPK0rQA2WvxfKxQMpCZ1q77rQJyMeEuStS76SlFtKzppEjfbPWZgYoorJzNY0oa8BD"></script>
<script>
 
paypal.Buttons({
style : {
    color: 'blue',
    shape: 'pill'
},
createOrder: function (data, actions) {
    return actions.order.create({
      purchase_units : [{
            description:  'Ecomb_hub Authorized Purchase',
            amount: {
                value: <?php echo $total;?>
            }
           }]
    });
},
onApprove: function (data, actions) {
    return actions.order.capture().then(function (details) {
      console.log(details);
      window.location.href="./finishorder.php";
    

      

    })      
       
    
},
onCancel: function (data) {
    
}
}).render('#paypal-payment-button');</script>


<?php } ?>
  
  
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="ecom.js"></script>
<script>
  $(window).load(function() {
    $('#loading').hide();
  });

  var pay = document.getElementById('pay');

if(document.URL.includes('checkout.php')){
    pay.style = 'font-size: 30px';
    pay.style.color = '#28b463';
    
}
</script>

</body>
</html>

