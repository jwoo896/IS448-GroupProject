<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title> ADG Creative Cafe </title>
	<link rel="stylesheet" type="text/css" href="styles.css"/>
	<script type="text/javascript" src="POS.js"></script>
</head>
<body>
	<div id="divWrapper">
	<div id="divHeader">
		<div id="divImageHead">
				<img src="POS design/adgcreativeicon.png" alt="ADG Creative Icon" height="100"/>
		</div>
	
	
	<!--create a selector for positioning of top "menu" items. Possibly add styling to the fonts.-->
		<div id="divMenu">
			<div id="menuPosition">
				<ul>
					<li><a href=<?php echo("'$page'> $pageName") ?></a></li>
					<li><a href="categoriesPage.php">Categories</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="logout.php">Logout</a></li>
					<li><a href="cart.php">Cart</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="divBody">
		Send us some feedback!<br/>
		<textarea name="feedback" form="contactform" size="500" height="300"></textarea>
		<form name="contactform" method="POST" action="feedback.php">
			<input type="submit" value="Submit"/>
		</form>
	</div>
</body>
</html>