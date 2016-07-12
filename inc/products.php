<?php

function get_list_view_html($product_id, $product) {

    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="shirt.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[101] = array(
	"name" => "Rosemarried with Children",
	"img" => "img/scrubs/rosemary.jpg",
	"price" => 12.95,
);
$products[102] = array(
	"name" => "Orange is the New Vanilla",
    "img" => "img/scrubs/orange.jpg",
    "price" => 10.95,
);
$products[103] = array(
    "name" => "Lavenduh! I want some Basil",
    "img" => "img/scrubs/lavender.jpg",
    "price" => 12.95,
);
$products[104] = array(
    "name" => "Oh Wise Sage",
    "img" => "img/scrubs/sage.jpg",
    "price" => 10.95,
);
$products[105] = array(
    "name" => "Lemon is the balm",
    "img" => "img/scrubs/lemon.jpg",
    "price" => 10.95,
);
$products[106] = array(
    "name" => "It's Grrrrrapefruit",
    "img" => "img/scrubs/grapefruit.jpg",
    "price" => 12.95,
);
$products[107] = array(
    "name" => "Chocolate Mint",
    "img" => "img/scrubs/chocolate.jpg",
    "price" => 10.95,
);
$products[108] = array(
    "name" => "Toasted Almond",
    "img" => "img/scrubs/almond",
    "price" => 10.95,
);

?>
