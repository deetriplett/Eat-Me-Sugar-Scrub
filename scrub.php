<?php include("inc/products.php");

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
include("inc/header.php"); ?>

		<div class="section page">

			<div class="wrapper">

				<div class="breadcrumb"><a href="scrubs.php">Sugar Scrubs</a> &gt; <?php echo $product["name"]; ?></div>

				<div class="scrub-picture">
					<span>

						<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">

					</span>
				</div>

				<div class="scrub-details">

					<h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>

				</div>

			</div>

		</div>

<?php include("inc/footer.php"); ?>
