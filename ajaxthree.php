<?php
session_start();
require('./functions.php');
print_r($_POST);


  

?>
 <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>
                <?php
                $con=mysqli_connect("localhost:3308","root","","ecom_hub");
                $sel="SELECT * FROM cart";
                $rs=$con->query($sel);
                while($row=$rs->fetch_assoc()){
                    
                ?>
               
                  <div class="border rounded offset-md-1" id="crt_table">
                      <div class="row bg-white pl-5">
                          <div class="col-md-3 offset-md-3 pl-0">
                              <img src="<?php echo $item['item_image'] ?>" alt="Image1" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                              <h5 class="pt-2"><?php echo $row['cart_id'];?></h5>
                              <small class="text-secondary">Seller: dailytuition</small>
                              <h5 class="product_price pt-2" data-id="<?php echo $row['item_id'];?>">$<?php echo $row['item_price'];?></h5>
                              
                              <form method="post" class="cart-items">
                                <input type="hidden" value="<?php echo $row['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" class="btn btn-danger" name="delete-cart-submit">Remove</button>
                              </form>
                          </div>
                          <div class="col-md-3 py-5">
                            <div class="quantity">
                            <form method="post" id="frm<?php echo $row['cart_id']?>">
                            <input type="hidden" name="cart_id" value="<?php  echo $row['cart_id'];?>">
            <input type="number" name="qty" value="<?php echo $row['item_quantity']; ?>" onchange="updcart(<?php echo $row['cart_id'];?>)" onkeyup="updcart(<?php echo $row['cart_id'];  ?>)" style="width: 60px;">
                            
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
                            <?php
                $con=mysqli_connect("localhost:3308","root","","ecom_hub");
                $sel="SELECT * FROM cart";
                $rs=$con->query($sel);
                while($row=$rs->fetch_assoc()){
                    
                ?>            <form method='post' class="items<?php echo $row['cart_id']?>">
                               <input type="hidden" name="cart" value="<?php echo $row['cart_id']?>">
                               <input type="hidden" name="qty" value="<?php echo $row['item_quantity']?>">
                            <button id="send" onclick="updmocart(<?php echo $row['cart_id']?>)">Proceed</button>
                               </form>
                            <?php }?>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>