<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title> ADG Creative Cafe </title>
	<link rel="stylesheet" type="text/css" href="styles.css"/>
	<script type="text/javascript" src="POS.js"></script>
</head>
<body>
	<?php
		$totalUp = 0;
		function calc($type,$quantity){
			if($type = 'Deer Park' || $type = 'Canada Dry' || $type = 'Izze'
				|| $type = 'Pepsi' || $type = 'Root Beer' || $type = 'Sprite'){
				$iPrice = $quantity * .5;
				return $iPrice;
			}
		function totalUp($p){
			global $totalUp += $p;
			return $totalup;
		}
		}
	?>
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
			<li><a href="categoriesPage.php">Categories</a></li>
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
		<?php foreach($_SESSION as $item => $quantity){
			if ($item != 'auth'){
		?>
			<tr>
				<td><?php echo $item?></td>
				<td><?php echo $quantity?></td>
				<td><?php $price = calc($item, $quantity); echo $price;?></td>
			</tr>
		<?php }}?>
		<tr>
			<th align= 'center' colspan='2'>Total</th>
			<td><?php  echo $totalUp?></td>
		</tr>

	</table>
</body>
</html>