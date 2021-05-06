<?php
session_start();
require ('./database/DBController.php');

// require Product Class
require ('./database/Product.php');

require ('database/Cart.php');

require ('database/order.php');

$EasternTimeStamp =mktime(date('H')-6,date('i'),date('s'),date("m"),date("d"),date("Y"));
$time2 = date('m/d/Y H:i:s a', $EasternTimeStamp);



// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

$Order = new Order($db);

if (isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}

if (isset($_POST['regularid'])){
    
    $_SESSION['size'] = $_POST['regularid'];
    
    
    
 }

 if (isset($_POST['proid'])){
    
    $_SESSION['size'] = $_POST['proid'];
    
}




  



?>

<!DOCTYPE html>
<html>
<head></head>
<body>
<div id="crt_table">
<?php foreach($product->getPS5('product') as $item){?>

<form method='post' id="frm">
<img src="<?php echo $item['item_image']?>" alt="image1">
<input type="hidden" name="time" value="<?php echo $time2 ?>">
<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']?>">
<input type="hidden" name="item_id" value="<?php echo $item['item_id']?>">
<input type="hidden" name="item_price" value="<?php echo $item['item_price']?>">
<input type="hidden" name="item_quantity" value="<?php echo $item['item_quantity']?>">
<input type="hidden" name="size" value="<?php echo $_SESSION['size']?>" >


<button type="submit" name="add">add to cart</button>
</form>

<?php }?>
<button class="pro" name="pro">pro</button>
<button type="submit" name="reg" class="reg">regular</button>





