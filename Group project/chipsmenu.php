<?php 
	session_start(); 
	if (!empty($_POST['cheetos'])){
		if(!isset($_SESSION['Cheetos'])){
			$_SESSION['Cheetos'] = $_POST['cheetos'];
		} else {
			$_SESSION['Cheetos'] += $_POST['cheetos'];
		}
	}
	if (!empty($_POST['doritos'])){
		if(!isset($_SESSION['Doritos'])){
			$_SESSION['Doritos'] = $_POST['doritos'];
		} else {
			$_SESSION['Doritos'] =+ $_POST['doritos'];
		}
	}
	if (!empty($_POST['fritos'])){
		if(!isset($_SESSION['Fritos'])){
			$_SESSION['Fritos'] = $_POST['fritos'];
		} else {
			$_SESSION['Fritos'] += $_POST['fritos'];
		}
	}
	if (!empty($_POST['funyuns'])){
		if(!isset($_SESSION['Funyuns'])){
			$_SESSION['Funyuns'] = $_POST['funyuns'];
		} else {
			$_SESSION['Funyuns'] += $_POST['funyuns'];
		}
	}
	if (!empty($_POST['lays'])){
		if(!isset($_SESSION['Lays'])){
			$_SESSION['Lays'] = $_POST['lays'];
		} else {
			$_SESSION['Lays'] += $_POST['lays'];
		}	
	}
	if (!empty($_POST['sunchips'])){
		if(!isset($_SESSION['Sunchips'])){
			$_SESSION['Sunchips'] = $_POST['sunchips'];
		} else {
			$_SESSION['Sunchips'] = $_POST['sunchips'];
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
				<img src="POS design/chips/cheetos.png" alt="Cheetos"/><br/>
				Quantity <select name="cheetos">
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
				<img src="POS design/chips/doritos.png" alt="Doritos"/><br/>
				Quantity <select name="doritos">
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
			<form method="POST" action="">
				<img src="POS design/chips/fritos.jpg" alt="Fritos"/><br/>
				Quantity <select name="fritos">
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
					<form method="$_POST" action="restockRequest">
				 		<input type="submit" value="Request more"/>
				 	</form>
			</form>
			</td>
		</tr>
		<tr>
			<td>
			<form method="POST" action="">
				<img src="POS design/chips/funyuns.png" alt="Funyuns"/><br/>
				Quantity <select name="funyuns">
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
			<form method="POST" action="">
				<img src="POS design/chips/lays.jpg" alt="Lays"/><br/>
				Quantity <select name="lays">
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
			<form method="POST" action="">
				<img src="POS design/chips/sunchips.gif" alt="Sunchips"/><br/>
				Quantity <select name="sunchips">
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
		</tr>
	</table>
</div>
</div>
</body>
</html>