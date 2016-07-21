<?php
function get_products_recent() {
  $recent = array();
  $all = get_products_all();

  $total_products = count($all);
  $position = 0;

  foreach($all as $product) {
    $position = $position + 1;
    if ($total_products - $postion < 4) {
      $recent[] = $product;
    }
  }
  return $recent;
}
//include("data.php");

    //  $sql = 'SELECT * FROM products';
    //  $products = $db->prepare($sql);
    //  $products->execute();
    //  foreach ( $products as $product) {
    //     $name = $product["name"];
    //     $desc = $product["description"];
    //     $price = $product["price"];
    //     $img = $product["img_path"];
    //  echo $product;
function get_products_all() {
       try {
         $db = new PDO("mysql:host=localhost;dbname=eatmesugar;port=3306", "user", "password");
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $db->exec("SET NAMES 'utf8'");
       } catch (Exception $e) {
         echo "Unable to connect";
         exit;
       }

       try {
         $results = $db->query("SELECT * FROM products");
       } catch (Exception $e) {
         echo "Unable to get Pantry door opened";
         exit;
       }

       $products = $results->fetchAll(PDO::FETCH_ASSOC);
       return $products;
}









function get_list_view_html($product_id, $product) {

    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="scrub.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '" class="img-responsive">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}
