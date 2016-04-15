<?php
	session_start();
	if (!empty($_POST['chobani'])){
		if(!isset($_SESSION['Chobani'])){
			$_SESSION['Chobani'] = $_POST['chobani'];
		} else {
			$_SESSION['Chobani'] += $_POST['chobani'];
		}
	}
	if (!empty($_POST['dannon'])){
		if(!isset($_SESSION['Dannon'])){
			$_SESSION['Dannon'] = $_POST['dannon'];
		} else {
			$_SESSION['Dannon'] += $_POST['dannon'];
		}
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
	<div id="divHeader">
	  <div id="divImageHead">
				<img src="POS design/adgcreativeicon.png" alt="ADG Creative Icon" height="100"/>
		</div>
		
		
		<!--create a selector for positioning of top "menu" items. Possibly add styling to the fonts.-->
		<div id="divMenu">
			<div id="menuPosition">
			<ul>
				<li ><a href="categoriesPage.php" >Categories</a></li>
				<li><a href="contact.html" >Contact</a></li>
				<li><a href="logout.php" >Logout</a></li>
				<li><a href="cart.php" >Cart</a></li>
			</ul>
			</div>
		</div>
	</div>
	<div id="divBody">
	<table>
		<tr>
			<td>
			<form method="POST" action="">
				<img src="POS design/yogurt/chobani.png" alt="Chobani"/><br/>
				Quantity <select name="chobani">
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
				 		</select>
				 	<input type="submit" value="Add"/>
				 <!--create a new php file for this? or add to cartphp?-->
				 	<form method="$_POST" action="restockRequest.php">
				 		<input type="submit" value="Request more"/>
				 	</form>
			</form>
			</td>

			<td>
			<form method="POST" action="">
				<img src="POS design/yogurt/dannon.png" alt="Dannon"/><br/>
				Quantity <select name="dannon">
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
				 		</select>
					<input type="submit" value="Add"/>
					<form method="$_POST" action="restockRequest.php">
				 		<input type="submit" value="Request more"/>
				 	</form>
			</form>
			</td>
			<td>			
	</table>
</div>
</div>
</body>
</html>