<?php

session_start();
	if(!$_SESSION["auth"]){
		header("Location:indexed.html");
	}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title> ADG Creative Cafe </title>
	<link rel="stylesheet" type="text/css" href="styles.css"/>
	<script type="text/javascript" src="POS.js"></script>
</head>
<body>
	<div id="divWrapper">
	<div id="divImageHead">
		<p>
			<img src="POS design/adgcreativeicon.png" alt="ADG Creative Icon" height="100"/>
		</p>
	</div>
	
	
	<!--create a selector for positioning of top "menu" items. Possibly add styling to the fonts.-->
	<div id="divMenu">
		<div id="menuPosition">
		<ul>
			<li><a href="categoriesPage.html">Categories</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="logout.php">Logout</a></li>
		<li><a href="checkout.html">Cart</a></li>
		</ul>
		</div>
	</div>
	
	<p>
	<hr/>
	</p>
</body>
</html>