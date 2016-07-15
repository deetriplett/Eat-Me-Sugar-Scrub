<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1>
				<span class="branding-title">
					<a href="index.php"><img src ="img/branding-title.png">
					</a>
				</span>
			</h1>

			<ul class="nav">
				<li class="scrubs <?php if ($section == "scrubs") { echo "on"; } ?>"><a href="scrubs.php">Scrubs</a></li>
				<li class="contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="contact.php">Contact</a></li>
				<!-- <li class="cart"><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=Q6NFNPFRBWR8S&amp;display=1">Shopping Cart</a></li> -->
			</ul>

		</div>

	</div>

	<div id="content">
