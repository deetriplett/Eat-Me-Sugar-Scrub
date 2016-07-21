<?php 
include("inc/products.php"); 
$pageTitle = "Full Inventory of Sugar Scrub";
$section = "scrubs";
include('inc/header.php'); ?>

<div class="container-fluid">
	<div class="section scrubs page">
	<div class="wrapper">
		<h1>Welcome to the Pantry</h1>
			<ul class="products">
			<?php foreach($products as $product_id => $product) {
				echo get_list_view_html($product_id,$product);
				}?>
			</ul>

	</div><!--End wrapper-->
	</div><!--End section-->
</div><!--End container-->
<div class="container-fluid">
<?php include('inc/footer.php') ?>
</div>
