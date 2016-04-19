<?php
	session_start();
	require_once("libs.php");
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
<!--Use case 2. HTML and PHP Written by Jae Woo.-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title> ADG Creative Cafe </title>
	<link rel="stylesheet" type="text/css" href="styles.css"/>
	<script type="text/javascript" src="POS.js"></script>
		<script type="text/javascript" src="modalJs.js"></script>
</head>
<body
	<?php
		if(!empty($_POST['moreRequested'])){
			$itemNum = intval($_POST['moreRequested']);
			$conn = connect();
			$sql = "UPDATE inventory SET requested=1 WHERE product_id='$itemNum'";
			$result = mysql_query($sql);
			disconnect($conn); 
			unset($_POST['moreRequested']);?>
			onload="openModal();"<?php
		}?>
>

	<div id="requestedModal" class="modal" style="display:none;">
	  <!-- Modal content -->
	  <div class="modal-content">
		<div class="modal-header">
		</div>
		<div class="modal-body">
			<span>Thank you, your request has been sent</span>
		</div>
		<div class="modal-footer">
		</div>
	  </div>
</div>

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
				<li><a href="contact.php" >Contact</a></li>
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

			<form method="POST" action="yogurtmenu.php" style="display:inline;">

			<form method="POST" action="" style="display:inline;">

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
 
			</form>
			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="031" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	
			</form>
			</td>

			<td>
 
			<form method="POST" action="yogurtmenu.php" style="display:inline;">

			<form method="POST" action="" style="display:inline;">
 
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

			</form>
			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="032" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	
			</form>
			</td>
			<td>			
	</table>
</div>
</div>
</body>
</html>