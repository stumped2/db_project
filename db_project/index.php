<!DOCTYPE html>
<html lang=en>

<style>
#head-container {
	color: #000;
	background: #ccc;
}

#header {
	margin: 0 auto;
	width: 860px;
	padding: 20px;
	background: #ddd;
}

#header h1 {
	margin: 0;
}

#navigation-container {
	float: left;
	width: 100%;
	color: #000;
	background: #333;
}

#navigation {
	margin: 0 auto;
	width: 900px;
}

#navigation ul {
	margin: 0;
	padding: 0;
}

#navigation ul li {
	list-style-type: none;
	display: inline;
}

#navigation li a {
	display: block;
	float: left;
	padding: 5px 10px;
	color: #fff;
	text-decoration: none;
	border-right: 1px solid #fff;
}

#navigation li a:hover {
	background: #383;
}

#content-container {
	float: left;
	width: 100%;
	color: #000;
	background: #eee;
}

#content-container2 {
	margin: 0 auto;
	width: 900px;
}

#content-container3 {
	float: left;
	width: 900px;
	background: #FFF url(two-fixed-background.gif) repeat-y 100% 0;
}

#content {
	clear: left;
	float: left;
	padding: 20px 0;
	margin: 0 0 0 30px;
	display: inline;
}

#content h2 { margin: 0; }

#footer-container
{
	clear: left;
	color: #fff;
	background: #000;
}

#footer
{
	margin: 0 auto;
	width: 900px;
	text-align: right;
	padding: 20px;
	height: 1%;
}
</style>

<body>
	<div id="head-container">
		<div id="header">
			<h1>Cloud Storage Services Inc.</h1>
		</div>
	</div>
	<div id="navigation-container">
		<div id="navigation">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="views/users.php">Users Statistics</a></li>
				<li><a href="#">Storage Information</a></li>
				<li><a href="#">Tier Information</a></li>
			</ul>
		</div>
	</div>
	<div id="content-container">
		<div id="content-container2">
			<div id="content-container3">
				<div id="content">
					<h2>Weclome!</h2>
					
					<p>This website will allow you to add, remove, update, and renew
					   users of Cloud Services Inc. services.</p>
					
					<p>Use the navigation ribbon above to nativate through the database 
					   controls.</p>
					   
					<p>Please contact the webmaster, Geoffrey Corey, at yourapanzy91@gmail.com
					   if you encouter any issues.</p>
				</div>

			</div>
		</div>
		<div id="footer-container">
			<div id="footer">
				Copyright © Cloud Services Inc., 2012 
			</div>
		</div>
	</div>
</body>
</html>
