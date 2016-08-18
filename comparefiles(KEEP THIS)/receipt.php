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
				<th>Accumulated Debt</th>
			</tr>
		<?php
		require_once("libs.php");
	
		$conn = connect();
	
		$result = mysql_query("SELECT pin, first_name, last_name, debt FROM user_login WHERE debt>0");
		
		while($row = mysql_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$row['pin']."</td>";
			echo "<td>".$row['first_name']." ".$row['last_name']."</td>";
			echo "<td>".$row['debt']."</td>";
			echo "</tr>";
		}
		
		 
		?>
			<tr style="background-color:white;">
				<td></td>
				<td></td>
				<td></td>
				<td>
					<form action="CategoriesPage.php">
					<input type="submit" value="Acknowledge"/>
					</form>
				</td>
				
		</tr>
		</table>
	</div>

</body>
</html>