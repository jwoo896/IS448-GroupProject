<!--<?php/*
	$server = mysql_connect("studentdb-maria.gl.umbc.edu", "jwoo2", "jwoo2");
	$db = mysql_select_db("jwoo2")
	$currentPin=$_POST['employeePin'];
	$userQuery="SELECT name FROM employee WHERE pin = $currentPin";
	$currentUsername = mysql_query($userQuery);

	session_start();
	if(isset($_COOKIE["currentUser"])){
		$currentUser = $_COOKIE["currentUser"];
	}else {
		setcookie("currentUser", $currentUsername]);
	}
*/?>-->
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
			<li><a href="CategoriesPage.php">Categories</a></li>
		<li><a href="contact.html">Contact</a></li>
		<li><a href="">Logout</a></li>
		<li><a href="cart.php">Cart</a></li>
		</ul>
		</div>
	</div>
	
	<p>
	<hr/>
	</p>
	<div id="divBody">
		<h3> Food Categories </h3> <!--Style the header-->

			<!--add styling to positioning of menu items-->
			<table>
				<tr>
					<td><a href="drinksmenu.php"><img src="POS design/drinks.png" alt="Apple image"/></a></td>
					<td><a href=""><img src="POS design/chips.png" alt="Chips image"/></a></td>
					<td><a href=""><img src="POS design/granolabars.png" alt="Granola Bars image"/></a></td>
				</tr>
				<tr>
					<td><a href=""><img src="POS design/fruits.png" alt="Fruits image"/></a></td>
					<td><a href=""><img src="POS design/cookies.jpeg" alt="Cookies image"/></a></td>
					<td><a href=""><img src="POS design/yogurt.png" alt="Yogurt image"/></a></td>
				</tr>
			</table>
	</div>
	</div>
</body>
</html>