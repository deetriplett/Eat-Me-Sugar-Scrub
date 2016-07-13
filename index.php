<?php
$pageTitle = "Eat Me Sugar Scrubs";
$section = "home";
include('inc/header.php'); ?>
		<div class="section banner">
			<div class="wrapper">

						  <h2>So good you'll want to eat it, but you probably shouldn't. </h2>
							<p>Sugar is not so good for your waist line, but it's terrifc for your skin! Your body deserves the best cleansing and moisturizing products possible - and Eat Me Sugar Scrub's handmade exfoliating body scrubs, made with sugar and salt, deliver
	              the ultimate cleanse while restoring moisture and providing a deep cleanse that other soaps can't.</p>
	            <p> Eat Me Sugar Scrub's exfoliating body scrubs unique formulation provides a one of a kind clean, leaving your skin nourished without excess oil or dryness.</p>
	          </a>
							<div class="button">
								<a href="scrubs.php"></a>
							</div>
			</div>
		</div>

		<div class="section scrubs latest">
			<div class="wrapper">
				<h2>Indulge yourself. Pick a flavor. </h2>

				<?php include("inc/products.php"); ?>
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

<?php include('inc/footer.php') ?>
