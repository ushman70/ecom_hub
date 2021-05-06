<?php

// Use to fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get product using item id
    public function getProduct($item_id = null, $table= 'product'){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

    public function testgetProduct($item_id = null, $cart_id = null,$table= 'cart'){
        if (isset($item_id) && isset($cart_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id} AND cart_id={$cart_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }


    public function getPS5($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 2 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getPS4($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 65 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getRGgundam($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 5 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getgundam2($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 19 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getgundam3($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 20 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getgundam4($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 21 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getgundam5($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 22 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getgundam6($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 23 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getgundam7($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 24 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getdbz1($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 1 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getdbz2($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 25 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getdbz3($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 26 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getdbz4($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 27 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getdbz5($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 28 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getdbz6($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 29 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getdbz7($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 30 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getmyhero1($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 31 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getmyhero2($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 32 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getmyhero3($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 33 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getmyhero4($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 34 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getmyhero5($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 35 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getnaruto1($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 36 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getnaruto2($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 37 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getnaruto3($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 38 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getnaruto4($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 39 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getnaruto5($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 40 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getnaruto6($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 41 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    
    public function getnaruto7($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 42 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getshirt1($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 43 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getshirt2($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 44 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getshirt3($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 45 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getshirt4($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 46 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getshirt5($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 47 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getshirt6($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 48 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getshirt7($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 49 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getshirt8($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 50 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getposter1($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 6 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getposter2($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 51 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getposter3($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 52 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getposter4($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 53 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getposter5($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 54 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getposter6($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 55 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getposter7($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 56 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getposter8($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 57 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getmug1($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 58 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getmug2($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 59 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getmug3($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 60 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getmug4($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 61 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getASUS($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 4 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getCorsair($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 63 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getTrident($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 64 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getAlienware($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 62 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getxbox($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 66 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getnintendo($table = 'product'){
        
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id= 68 LIMIT 1 ");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getUserData($table = 'cart'){
        if($_SESSION['user_id'] != null){
        $sesh = $_SESSION['user_id'];
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE user_id={$sesh}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    } else {
        return array();
    }
 }
 

 public function gundamkits($table = 'product'){
    $result = $this->db->con->query("SELECT * FROM {$table} WHERE keyword= 'gundam'");

    $resultArray = array();

    // fetch product data one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
    }

    return $resultArray;
}

public function dbzfigures($table = 'product'){
    $result = $this->db->con->query("SELECT * FROM {$table} WHERE keyword= 'dragonballz'");

    $resultArray = array();

    // fetch product data one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
    }

    return $resultArray;
}

public function myherofigures($table = 'product'){
    $result = $this->db->con->query("SELECT * FROM {$table} WHERE keyword= 'my hero'");

    $resultArray = array();

    // fetch product data one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
    }

    return $resultArray;
}

public function narutofigures($table = 'product'){
    $result = $this->db->con->query("SELECT * FROM {$table} WHERE keyword= 'naruto'");

    $resultArray = array();

    // fetch product data one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
    }

    return $resultArray;
}

public function shirts($table = 'product'){
    $result = $this->db->con->query("SELECT * FROM {$table} WHERE keyword= 'shirt'");

    $resultArray = array();

    // fetch product data one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
    }

    return $resultArray;
}

public function posters($table = 'product'){
    $result = $this->db->con->query("SELECT * FROM {$table} WHERE keyword= 'poster'");

    $resultArray = array();

    // fetch product data one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
    }

    return $resultArray;
}

public function mugs($table = 'product'){
    $result = $this->db->con->query("SELECT * FROM {$table} WHERE keyword= 'mug'");

    $resultArray = array();

    // fetch product data one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
    }

    return $resultArray;
}
 
 public function bestDeals($table = 'product'){
    $result = $this->db->con->query("SELECT * FROM {$table} LIMIT 4");

    $resultArray = array();

    // fetch product data one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
    }

    return $resultArray;
}


public function invoice($table = 'cart'){
    if($_SESSION['user_id'] != null){
    $sesh = $_SESSION['user_id'];
    $result = $this->db->con->query("SELECT * FROM {$table} WHERE user_id={$sesh} GROUP BY date");

    $resultArray = array();

    // fetch product data one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
    }

    return $resultArray;
} else {
    return array();
  }
}

public function invoiceorderhistory($table = 'cart'){
    if($_SESSION['user_id'] != null){
    $sesh = $_SESSION['user_id'];
    $result = $this->db->con->query("SELECT * FROM {$table} WHERE user_id={$sesh} AND date");

    $resultArray = array();

    // fetch product data one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
    }

    return $resultArray;
} else {
    return array();
  }
}


public function trueinvoice($date=null, $table = 'cart'){
    if($_SESSION['user_id'] != null){
    $sesh = $_SESSION['user_id'];
    $result = $this->db->con->query("SELECT * FROM {$table} WHERE user_id={$sesh} AND date={$date}");

    $resultArray = array();

    // fetch product data one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
    }

    return $resultArray;
} else {
    return array();
  }
}




}

?>