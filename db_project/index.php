<!DOCTYPE html>
<html lang=en>
<title>Cloud Storage Database</title>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include_once 'functions/functions.php';
	$con;
	dbcon($conn);
?>
	<div id="head-container">
		<div id="header">
			<h1>Cloud Storage Services Inc.</h1>
		</div>
	</div>
	<div id="navigation-container">
		<div id="navigation">
			<ul>
				<li><a href="input/userin.php">Add User</a></li>
				<li><a href="views/userview.php">User Information</a></li>
				<li><a href="views/storageview.php">Storage Information</a></li>
				<li><a href="views/tierview.php">Tier Information</a></li>
			</ul>
		</div>
	</div>
	<div id="content-container">
		<div id="content-container2">
			<div id="content-container3">
				<div id="content">
					<h2>Weclome!</h2>

					<p>This page is for managing subscribers of Cloud Storage Services.
						You will be able to add or remove users, modify account standing
						of users andmodify the subscription details associated with the
						user.</p>

					<p>Use the navigation ribbon above to go to where you need.</p>

				</div>

			</div>
		</div>
		<div id="footer-container">
			<div id="footer">
				Copyright © Cloud Services Inc., 2012 <br>
			</div>
		</div>
	</div>
	</body>
</html>
