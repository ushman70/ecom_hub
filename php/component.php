<?php
function component($productname, $productprice, $productimg, $productid)
{
  
  $element = "
     <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
       <form action=\"index.php\" method=\"post\">
         <div class=\"card shadow bg-primary mb-3\">
           <div>
             <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
           </div>
           <div class=\"card-body\"   style=\"height:25%;\">
             <h5 class=\"card-title\">$productname</h5>
             <h5>
               <span class=\"price\">$$productprice</span>
            </h5>
            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
            <input type='hidden' name='p_id' value='$productid'>
           </div>
          </div>
        </form>
      </div>
   "; 
   echo $element;
}

function divider()
{
    $greatdivide = "<br><br><br><br><br><br><br>
    <br><br>
    
    ";
    echo $greatdivide;
}

function cartElement($productimg, $productname, $productprice, $productid){
  
  $element = "
  
  <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                  <div class=\"border rounded offset-md-1 \">
                      <div class=\"row bg-white\">
                          <div class=\"col-md-3 offset-md-3 pl-0\">
                              <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                          </div>
                          <div class=\"col-md-6\">
                              <h5 class=\"pt-2\">$productname</h5>
                              <small class=\"text-secondary\">Seller: dailytuition</small>
                              <h5 class=\"pt-2\">$$productprice</h5>
                              
                              <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                          </div>
                          <div class=\"col-md-3 py-5\">
                              <div>
                                  <label for=\"quantity\">Quantity</label>
                                  
                                  <input type=\"text\" value=\"1\"  name=\"quantity\" class=\"form-control w-50 d-inline\">
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
  
  ";
  echo  $element;
}




?>