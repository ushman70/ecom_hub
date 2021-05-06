<?php 
 
  
class Order {
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }


    public  function insertIntoOrder($params = null, $table = "mo"){
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

    public function addToOrder($cartid, $userid, $itemid, $qty){
        if (isset($cartid) && isset($userid) && isset($itemid) && isset($qty)){
            
           
    
    for($count = 0; $count < 10; $count++){
    $params = array(
        "cart_id" => $cartid[$count],
        "user_id" => $userid[$count],
        "item_id" => $itemid[$count],
        "item_quantity" => $qty[$count]
        
        );
        $result = $this->insertIntoOrder($params);
        if ($result){
            // Reload Page
            
            header("Location: " . $_SERVER['PHP_SELF']);
            
       }
    }
   }
 }


 public function testaddToOrder($setid=null){
    if ($setid != null){
     
      
      
    
    
      
      
    
       
      
   }
 }

}


?>
