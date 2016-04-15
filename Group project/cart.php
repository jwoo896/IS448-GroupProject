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
			if($type = 'Canada Dry' || $type = 'Izze' || $type = 'Pepsi' 
				|| $type = 'Root Beer' || $type = 'Sprite' 
				|| $type = 'Doritos' || $type = 'Funyuns' || $type = 'Kiwi'
				|| $type = 'Orange' || $type = 'Peach' || $type = "Pear"
				|| $type = 'Chips Ahoy' || $type = 'Famous Amos' || $type = 'Nilla Wafers'
				|| $type = 'Oreos'){
				$iPrice = $quantity * .75;
				return $iPrice;
			}
			if($type = 'Deer Park' || $type = 'Cheetos' || $type = 'Fritos' 
				|| $type = 'Lays' || $type = 'Sunchips' || $type = 'Apple' 
				|| $type = 'Banana' || $type = 'Nutter Butters' || $type = 'Nutty Bars'){
				$iPrice = $quantity * .5;
				return $iPrice;
			}
			if($type = 'Chobani' || $type = 'Dannon'){
				$iPrice = $quantity * 1;
				return $iPrice;
			}
		}
		function totalUp($p){
			global $totalUp;
			$totalUp += $p;
			
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
		<div id="divBody">
			<table border="1px">
				<caption> Your Order </caption>
				<tr>
					<th>Item</th>
					<th>Quantity</th>
					<th>Price</th>
				</tr>
				<?php foreach($_SESSION as $item => $quantity){
				if ($item != 'User' && $item != 'auth' && $item != 'pin' && $item != 'permission'){?>
				<tr>
					<td><?php echo $item?></td>
					<td><?php echo $quantity?></td>
					<td><?php $price = calc($item, $quantity); echo $price;?></td>
				</tr>
				<?php }totalUp($price);}?>
				<tr>
					<th align= 'center' colspan='2'>Total</th>
					<td><?php echo $totalUp?></td>
				</tr>
			</table>

			<button id = 'confirmBtn' class = 'modal-submit' onclick = "showModal()">Confirm</button>
	
			<div id = 'confirmationModal' class = 'modalHide'>
				<div class = 'modal-content'>
					<div class = 'modal-body'>
						<table border='1px'>
							<tr>
								<th>Sub-total</th>
								<td><?php echo $totalUp?></td>
							</tr>
							<tr>
								<th>Tax</th>
								<td><?php $tax = $totalUp * .06; echo $tax?></td>
							</tr>
							<tr>
								<th>Total</th>
								<td><?php $totalUp = $totalUp + $tax; echo $totalUp?></td>
							</tr>
						</table>
						<button id = 'modalCancelBtn' class = 'modal-submit' onclick = 'closeModal();'>Cancel</button>
						<button id = 'modalConfirmBtn' class = 'modal-submit' onclick = 'location.href="finalize.php"'>Confirm</button>
					</div>	
			<!--<form class = 'modal-submit' method = "POST" action = "">
				<input type = 'submit' name='submitForm' value = 'Submit'/>
			</form>-->
				</div>
			</div>
		</div>
	</div>
</body>
</html>