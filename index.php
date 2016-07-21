<?php
include('inc/header.php');
include("inc/products.php"); 
$pageTitle = "Eat Me Sugar Scrubs";
$section = "home";
?>
<div class="container-fluid jumbotron text-center">
	<div id="content">
		<h1>So good you'll want to eat it, but you probably shouldn't. </h1>
		<p>Sugar is not so good for your waist line, but it's terrific for your skin! Your body deserves the best cleansing and moisturizing products possible - and Eat Me Sugar's handmade exfoliating body scrubs deliver the ultimate cleanse while restoring moisture and providing a deep cleanse that other soaps can't.</p>
		<p> With an unique formulation that provides a one of a kind clean, Eat Me Sugar scrubs leave your skin nourished without excess oil or dryness.</p>
	</div>
</div>

<div class="container-fluid text-center">
	<div class="section scrubs">
		<div class="wrapper">
			<h2>Indulge yourself. Pick a flavor. </h2>
	<div class="container-fluid text-center">
		<ul class="products">
		<?php
		$total_products = count($products);
		$position = 0;
		$list_view_html = "";
		foreach($products as $product_id => $product) {
			$position = $position + 1;
			if ($total_products - $position < 4) {
				$list_view_html = get_list_view_html($product_id,$product) . $list_view_html;
				}
			}
			echo $list_view_html;
		?>
		</ul>
	</div>
	</div>
	</div>
</div>

<div class="container-fluid">
<?php include('inc/footer.php') ?>
</div>
