<?php
	//have the form that takes info point back to this page. echo out the added info somewhere
	$server = mysql_connect("studentdb-maria.gl.umbc.edu", "jwoo2", "jwoo2");
	$db = mysql_select_db("jwoo2")
	$newPin = $_POST['newpin'];
	$newUname = $_POST['newName'];
	$addUser = "INSERT INTO employee VALUES($newPin, $newUname)";

	$result = mysql_query($addUser);
	if(!$result){
		echo "Error - query could not be executed. User was not added.";
		$errorM = mysql_error();
		echo "<p> $error </p>";
		exit;
	}else{
		echo "$newUname has been added with the pin: $newPin.";
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
			<li><a href="CategoriesPage.html">Categories</a></li>
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
		<form method="POST" action="">
		New employee's name: <input type="text" name="newName"/><br/>
		New employee's 4 digit pin: <input type="text" name="newPin" size="4" maxlength="4"/>
		<input type="submit" value="Submit"/>
	</div>

</body>
</html>