<!DOCTYPE html>
<html lang=en>
<title>Add User</title>

<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/input.css">
</head>

<body>
	<div id="head-container">
		<div id="header">
			<h1>Cloud Storage Services Inc.</h1>
		</div>
	</div>
	<div id="navigation-container">
		<div id="navigation">
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../views/userview.php">Users Statistics</a></li>
				<li><a href="../views/storageview.php">Storage Information</a></li>
				<li><a href="../views/tierview.php">Tier Information</a></li>
			</ul>
		</div>
	</div>
	<div id="content-container">
		<div id="content-container2">
			<div id="content-container3">
				<div id="content">
					<div id="stylized" class="myform">
						<form>
							<h2>Add User to Database</h2>

							<fieldset>
								<legend> Personal Information</legend>
								<label>First Name <span class="small">Enter your first name</span>
								</label> <input type="text" name="first" id="first" /> <label>Last
									Name<span class="small">Enter you last name</span>
								</label> <input type="text" name="last" id="last" />
							</fieldset>

							<fieldset>
								<legend>Contact Information</legend>
								<label>Email <span class="small">Enter a valid address</span>
								</label> <input type="text" name="email" id="email" />
							</fieldset>

							<fieldset>
								<legend>Subscription Option</legend>
								<label>Tier <span class="small">Must chose one </span>
								</label> <select name="tier" id="tier">
									<option value="1">Basic</option>
									<option value="2">Plus</option>
									<option value="3">Premium</option>
								</select>
							</fieldset>
							<br>
							<button type="submit">Add</button>
							<div class="spacer"></div>

						</form>
					</div>
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
