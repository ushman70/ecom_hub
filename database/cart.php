<?php


// php cart class
class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table
    public  function insertIntoCart($params = null, $table = "cart"){
        if ($this->db->con != null){
            if ($params != null){
                // "Insert into cart(user_id) values (0)"
                // get table columns
                $columns = implode(',', array_keys($params));

                $values = implode(',' , array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    public  function moinsertIntoCart($params = null, $table = "mocart"){
        if ($this->db->con != null){
            if ($params != null){
                // "Insert into cart(user_id) values (0)"
                // get table columns
                $columns = implode(',', array_keys($params));

                $values = implode(',' , array_values($params));
                    
                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    // to get user_id and item_id and insert into cart table
    public  function addToCart($userid, $itemid, $qty, $itemprice){
        if (isset($userid) && isset($itemid) && isset($qty) && isset($itemprice)){
            
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid,
                "item_quantity" => $qty,
                "item_price" => $itemprice
                 
                );

            // insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result){
                // Reload Page
                
                header("Location: " . $_SERVER['PHP_SELF']);
                
            }
        }
    }

    public  function moaddToCart($userid, $itemid, $qty, $itemprice){
        if (isset($userid) && isset($itemid) && isset($qty) && isset($itemprice)){
            
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid,
                "item_quantity" => $qty,
                "item_price" => $itemprice
                
                
                );

            // insert data into cart
            $result = $this->moinsertIntoCart($params);
            if ($result){
                // Reload Page
                
                header("Location: " . $_SERVER['PHP_SELF']);
                
            }
        }
    }

    // delete cart item using cart item id
    public function deleteCart($item_id = null, $table = 'cart'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function modeleteCart($item_id = null, $table = 'mocart'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }


    public function UserdeleteCart($userid = null, $table = 'cart'){
        if($userid != null){
            $userid = $_SESSION['user_id'];
            $result = $this->db->con->query("DELETE FROM {$table} WHERE user_id={$userid}");
           
            return $result;
        }
    }

    // calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
             return sprintf('%.2f' , $sum);
              
        }
    }

    // get item_it of shopping cart list
    public function getCartId($cartArray = null, $key = "item_id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }

    }

    // Save for later
    public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = "cart"){
        if ($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id={$item_id};";

            // execute multiple query
            $result = $this->db->con->multi_query($query);

            if($result){
                header("Location :" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function increasequantity($qty=null, $cart_id=null ,$item_id=null, $table = "cart"){
        
            if ($qty && $item_id != null){
                $cart_id=$_POST['cart_id'];
                $qty=$_POST['qty'];
                $item_id = $cart_id;
                
                
                
                // create sql query
                $query_string = "UPDATE {$table} SET item_quantity={$qty} WHERE item_id={$item_id};";

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        
    }



    public function verifyquantity($cart_id=null ,$item_id=null){
             
        if ($cart_id && $item_id != null){
        
            $cart_id=$_POST['cart_id'];
            $item_id = array(
                $_POST['cart_id'] => $item_id
            );
            $item_id = array_unique($item_id);
            if(in_array($cart_id, $item_id)){
                echo "<span class=\"col-md-3 text-success\">Quantity Verified!</span>";
            }
            
          
        }
    
}


}

?>