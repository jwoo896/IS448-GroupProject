<?php
session_start();
	/*Level of privilege check, written by Josh Standiford*/
	
 	$permission = $_SESSION["permission"];
 	switch($permission){
 			case "administrator":
				$page = "administrator.php";
				$pageName = "Administrative Privileges";
 			break;
 
 			case "accountant":
				$page = "generateReceipts.php";
 				$pageName = "Receipts";
 			break;

 			default: 
 				//No Credentials
 			break;
 		}
?>
<!--HTML written by Jae Woo.-->
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
		<h3> Food Categories </h3> <!--Style the header-->

			<!--add styling to positioning of menu items-->
			<table>
				<tr>
					<td><a href="drinksmenu.php"><img src="POS design/drinks.png" alt="Apple image"/></a></td>
					<td><a href="chipsmenu.php"><img src="POS design/chips.png" alt="Chips image"/></a></td>
					<td><a href="granolabars.php"><img src="POS design/granolabars.png" alt="Granola Bars image"/></a></td>
				</tr>
				<tr>
					<td><a href="fruitsmenu.php"><img src="POS design/fruits.png" alt="Fruits image"/></a></td>
					<td><a href="cookies.php"><img src="POS design/cookies.jpeg" alt="Cookies image"/></a></td>
					<td><a href="yogurtmenu.php"><img src="POS design/yogurt.png" alt="Yogurt image"/></a></td>
				</tr>
			</table>
	</div>
	</div>
</body>
</html>