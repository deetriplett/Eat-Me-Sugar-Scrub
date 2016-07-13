<?php

function get_list_view_html($product_id, $product) {

    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="scrub.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

$products = array();
$products[0] = array(
	"name" => "Rosemarried with Children",
	"img" => "img/rosemary.jpg",
	"price" => 12.95,
  "description" => "Children aren't the only cause of gray hair. Halt premature aging of the skin with our Rosemarried with Children sugar scrub.
    Rosemary promotes healthy, moisturized skin. Free-radical damage compromises the support structure in your skin, leading to wrinkles,
    sagging and uneven skin tone. supports healthy collagen levels"
);
$products[1] = array(
	"name" => "Orange is the New Vanilla",
    "img" => "img/orange.jpg",
    "price" => 10.95,
    "description" => "This vigorous scrub is just what the doctor ordered. An orange, vanilla swirl of goodness that will leave you softer
    than you have ever imagined. This aromatic scrub is zesty, citrusy and a great way to start your morning."
);
$products[2] = array(
    "name" => "Lavenduh! I want some Basil",
    "img" => "img/lavender.jpg",
    "price" => 12.95,
    "description" => "Bye Bye blackheads, acne, pimples. Blemish free, glowing skin. The combo of these two powerhouse herbs
    can help treat acne, aid in eczema treatment, and detoxify skin. After a long day at work, declare 'Lavenduh! I want some Basil!'
    and hope into a warm bath with this extraordinary sugar scrub. Lavender is excellent for treating tired muscles, especially of the feet."
);
$products[3] = array(
    "name" => "Oh Wise Sage",
    "img" => "img/sage.jpg",
    "price" => 10.95,
    "description" => "It derives its scientific name from the Latin word 'salvere' which means 'to be saved.' Oh Wise Sage combines exfoliating sugar and sage
    into a real power house of a cleanser. The antioxidants in sage reverse the signs of ageing such as wrinkles, fine lines, and age spots."
);
$products[4] = array(
    "name" => "Lemon is the Balm",
    "img" => "img/lemon.jpg",
    "price" => 10.95,
    "description" => "What makes Lemon balm a wonderful addition in skin care products? It’s ability to penetrate into the skin and protect against UV-radiation
    and sun damage. Added bonuses: Lemon balm is also calming and anti-inflammatory. Don't let daily stress show on your skin, scrub up with Lemon is the Balm. "
);
$products[5] = array(
    "name" => "It's Grrrapefruit",
    "img" => "img/grapefruit.jpg",
    "price" => 12.95,
    "description" => "Truly the 'fruit of paradise', grapefruit is rich in Vitamins C and A. It's antioxidant effects protect
    the skin from environmental hazards and it also stimulates the production of skin collagen that brings smoothness and elasticity to the skin.
    Try It's Grrrapefruit to give your skin softness and renew damaged skin."
);
$products[6] = array(
    "name" => "Choco-lotta Mint",
    "img" => "img/chocolate.jpg",
    "price" => 10.95,
    "description" => "It's chocolatey. It's minty. It's Choco-lotta Mint! Chock full of rich, decacadent dark chocolate and fresh,
    zingy mint, this sugar scrub is sure to please."
);
$products[7] =  array(
    "name" => "The Almond Scrub",
    "img" => "img/almond.jpg",
    "price" => 10.95,
    "description" => "The humble almond has powerful antioxidant and moisturising properties.
     It contains a combination of two essential fatty acids, which help to create healthy, supple skin.
     Defy age with THe Almond Scrub."
);

?>
