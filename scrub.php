<?php 
include("inc/products.php");
include("inc/header.php");
if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
	}
}
if (!isset($product)) {
	header("Location: scrubs.php");
	exit();
}

$section = "scrubs";
$pageTitle = $product["name"];
?>

<div class="container-fluid">
	<div class="section page">
		<div class="breadcrumb"><a href="scrubs.php">Sugar Scrubs</a> &gt; <?php echo $product["name"]; ?></div>

	<div class="container-fluid">
		<div class="col-md-4">
			<div class="scrub-picture img-responsive">
				<span>
				<img src="<?php echo $product["img"]; ?>" class="img-responsive" alt="<?php echo $product["name"]; ?>">
				</span>
			</div><!--End scrub-pic class-->
		</div><!--End col-md class-->

		<div class="col-md-6">
			<div class="scrub-details">
				<h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>
				<p> <?php echo $product["description"]; ?> </p>
			</div><!--End scrub-details class-->
		</div><!--End col-md class-->
		<div class="col-md-2"><!--Formatting only--></div>
	</div><!--End container-->
	</div><!--End section-->
</div>

<div class="container-fluid">
<?php include('inc/footer.php') ?>
</div>
