<?php

<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>

	<div class="header">
		<div class="wrapper">
			<h1 class="branding-title"><a href="./">Eat Me Sugar Scrub</a></h1>
			<ul class="nav">
				<li class="shirts <?php if ($section == "shirts") { echo "on"; } ?>"><a href="shirts.php">Shirts</a></li>
				<li class="contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="contact.php">Contact</a></li>
				<li class="cart"><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=Q6NFNPFRBWR8S&amp;display=1">Shopping Cart</a></li>
			</ul>
		</div>
  </div>

	<div id="content">
    <div class="section banner">
      <div class="wrapper">
        <img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
        <div class="button">
          <a href="shirts.php">
            <h2>So good you'll want to eat it, but you probably shouldn't. </h2>
            <p>Sugar is not so good for your waist line, but it's terrifc for your skin! Your body deserves the best cleansing and moisturizing products possible - and Eat Me Sugar Scrub's handmade exfoliating body scrubs, made with sugar and salt, deliver
              the ultimate cleanse while restoring moisture and providing a deep cleanse that other soaps can't.</p>
            <p> Eat Me SUgar Scrub's exfoliating body scrubs unique formulation provides a one of a kind clean, leaving your skin nourished without excess oil or dryness.</p>
          </a>
        </div>
      </div>

    </div>

    <div class="section shirts latest">

      <div class="wrapper">

        <h2>Pick Your favorite flavor</h2>
      </div>

      <div class="footer">

        <div class="wrapper">

          <ul>
            <li><a href="http://twitter.com/deetriplett">Twitter</a></li>
            <li><a href="https://www.facebook.com/deetriplett">Facebook</a></li>
          </ul>

          <p>&copy;<?php echo date('Y'); ?> Eat Me Sugar Scrubs</p>

        </div>

      </div>

    </body>
    </html>
