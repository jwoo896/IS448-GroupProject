<?php
	session_start();
	$_SESSION['drinks'] = $drinksvar;
	$_SESSION['chips'] = $chipsvar;

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
		<li><a href="logout.php">Logout</a></li>
		<li><a href="cart.php">Cart</a></li>
		</ul>
		</div>
	</div>
	
	<p>
	<hr/>
	</p>
	<?php
	//write items of each category to file IF user hits confirm

	?>
		<table border="1px">
		<caption> Your Order </caption>
		<tr>
			<th>Item</th>
			<th>Quantity</th>
			<th>Price</th>
		</tr>
		<?php if (!empty($_SESSION['drinks'])){foreach($_SESSION['drinks'] as $index=>$quantity){?>
			<tr>
				<td><?php echo $index?></td>
				<td><?php echo $quantity?></td>
			</tr>
		<?php }}?>

	</table>
	test link
</body>
</html>