<?php
	require_once("libs.php");
	credCheck();
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
		<li><a href="cart.php">Cart</a></li>
		<li><a href="addUser.php">Add User</a></li>
		</ul>
		</div>
	</div>
	
	<p>
	<hr/>
	</p>
	<div id="divBody">
	 	<?php 
	 	if($_SESSION["validLN"] || $_SESSION["validFN"]){
	 		echo("<span style='color:red;'>* There's an error on this page.</span>");
	 	}

	 	?>
		<form method="POST" action="submitUserInfo.php">
		New employee's first name: <input type="text" name="firstName"/><?php if($_SESSION["validFN"]){echo("<span style='color:red;'>* Please enter only letters.</span>");} ?><br />
		New employee's last name: <input type="text" name="lastName"/><?php if($_SESSION["validLN"]){echo("<span style='color:red;'>* Please enter only letters.</span>");} ?><br />
		Position:  
					<select name="position">
					<option value="administrator">Administrator</option>
					<option value="accountant">Accountant</option>
					<option value="guest">Guest</option>
					</select>

		<input type="submit" value="Submit"/>
	</div>

</body>
</html>