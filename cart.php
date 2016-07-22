<?php
session_start();
include_once("config.php");

$pageTitle = "Buy Eat Me Sugar";
$section = "cart";
include('inc/header.php');
?>
<div class="container-fluid text-center">
  <h1>Cart</h1>
</div>
<div class= "container-fluid center">
  <h2>Product List<h2>
  <div class = "col-md-8">

<div class="products">
<?php
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT id, name, price FROM products ORDER BY id ASC");
if($results){
$products_item = '<ul class="products" id="list">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
    <li class="product">
    <form method="post" action="cart_update.php">
    <div class="product-content"><h3>{$obj->name}</h3>
    <div class="product-info">
    Price {$currency}{$obj->price}

    <fieldset>
    <label>
        <span>Quantity</span>
        <input type="text" size="2" maxlength="2" name="product_qty" value="1" />
    </label>
    </fieldset>

    <input type="hidden" name="product_code" value="{$obj->id}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" class="add_to_cart">Add</button></div>
    </div></div>
    </form>
    </li>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
</div>
    <div class="shopping-cart">
    <?php
    if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
    {
        echo '<div class="cart-view-table-front" id="view-cart">';
        echo '<h3>Your Shopping Cart</h3>';
        echo '<form method="post" action="cart_update.php">';
        echo '<table width="100%"  cellpadding="6" cellspacing="0">';
        echo '<tbody>';

        $total =0;
        $b = 0;
        foreach ($_SESSION["cart_products"] as $cart_itm)
        {
            $product_name = $cart_itm["name"];
            $product_qty = $cart_itm["qty"];
            $product_price = $cart_itm["price"];
            $product_code = $cart_itm["id"];

            $bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
            echo '<tr class="'.$bg_color.'">';
            echo '<td>Qty <input type="text" size="2" maxlength="2" name="product_qty['.$id.']" value="'.$qty.'" /></td>';
            echo '<td>'.$product_name.'</td>';
            echo '<td><input type="checkbox" name="remove_code[]" value="'.$id.'" /> Remove</td>';
            echo '</tr>';
            $subtotal = ($price * $qty);
            $total = ($total + $subtotal);
        }
        echo '<td colspan="4">';
        echo '<button type="submit">Update</button><a href="view_cart.php" class="button">Checkout</a>';
        echo '</td>';
        echo '</tbody>';
        echo '</table>';

        $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
        echo '</form>';
        echo '</div>';

    }
    ?>
    </div>
  </div>
<div class = "col-md-4">
    <div class="cart-view-table-back">
<form method="post" action="cart_update.php">
<table width="100%"  cellpadding="6" cellspacing="0"><thead><tr><th>Quantity</th><th>Name</th><th>Price</th><th>Total</th><th>Remove</th></tr></thead>
  <tbody>
    <?php
    if(isset($_SESSION["cart_products"])) //check session var
    {
        $total = 0; //set initial total value
        $b = 0; //var for zebra stripe table
        foreach ($_SESSION["cart_products"] as $cart_itm)
        {
            //set variables to use in content below
            $name = $cart_itm["name"];
            $qty = $cart_itm["qty"];
            $price = $cart_itm["price"];
            $id = $cart_itm["id"];
            $total = ($price * $qty); //calculate Price x Qty

            $bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe
            echo '<tr class="'.$bg_color.'">';
            echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$id.']" value="'.$qty.'" /></td>';
            echo '<td>'.$name.'</td>';
            echo '<td>'.$currency.$price.'</td>';
            echo '<td>'.$currency.$subtotal.'</td>';
            echo '<td><input type="checkbox" name="remove_code[]" value="'.$id.'" /></td>';
            echo '</tr>';
            $total; //add subtotal to total var
        }


    }
    ?>
    <tr><td colspan="5"><span><?php echo $shipping_cost;?> Amount : <?php echo $grandTotal;?></span></td></tr>
    <tr><td colspan="5"><a href="cart.php" class="button">Add More Items</a><button type="submit">Update</button></td></tr>
  </tbody>
</table>
<input type="hidden" name="return_url" value="<?php
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
</form>
</div>
  </div><!--End column3-->
</div>

</div>
<?php include('inc/footer.php');
