<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!-- <link rel="stylesheet" href="css/bootrap.css" type="text/css"> -->
</head>
<body>
<div class="container-fluid" >
		<nav class="navbar navbar-inverse">
			<div class="header">
						<span class="branding-title ">
							<a href="index.php"><img src ="img/branding-title.png" class="img-responsive" alt="Eat Me Sugar Scrubs">
							</a>
						</span>
				<div class="container-fluid">
 				<ul class="nav navbar-nav navbar-right">
				<li class="scrubs <?php if ($section == "scrubs") { echo "on"; } ?>"><a href="scrubs.php">Scrubs</a></li>
				<li class="contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="contact.php">Contact</a></li>

			</ul>
		</div>
	</div>
	</div>

		 	<div class="wrapper">
	<div id="content">
