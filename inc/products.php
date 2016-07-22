<?php
include("inc/data.php");

  //    $sql = 'SELECT * FROM products';
  //    $products = $db->prepare($sql);
  //    $products->execute();
  //    foreach ( $products as $product) {
  //       $name = $product["name"];
  //       $desc = $product["description"];
  //       $price = $product["price"];
  //       $img = $product["img_path"];
  //    echo $product;

function get_list_view_html($product_id, $product) {

    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="scrub.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img_path"] . '" alt="' . $product["name"] . '" class="img-responsive">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}
