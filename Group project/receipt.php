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
		<h1>Receipts</h1>
		
		<table class="tableStriped">
			<tr>
				<th>Employee ID</th>
				<th>Employee Name</th>
				<th>Receipt ID</th>
				<th>Date of Generation</th>
			</tr>
		<?php
		$receipts = fopen("receipts.txt", "r") or die("Unable to open file!");
		while(!feof($receipts)) {
			$receiptline = fgets($receipts);
			$entries = explode(" ", $receiptline);
			echo "<tr>";
			echo "<td>".$entries[0]."</td>";
			echo "<td>".$entries[1].$entries[2]."</td>";
			echo "<td>".$entries[3]."</td>";
			echo "<td>".$entries[4]."</td>";
			echo "</tr>";
		}
		fclose($receipts);
		
		 
		?>
			<tr style="background-color:white;">
				<td></td>
				<td></td>
				<td></td>
				<td>
					<form action="receipt.php">
					<input type="submit" value="Update Payrolls"/>
					</form>
				</td>
				
		</tr>
		</table>
	</div>

</body>
</html>