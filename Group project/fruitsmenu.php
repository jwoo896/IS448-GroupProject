<?php
	session_start();
	if (!empty($_POST['apple'])){
		if(!isset($_SESSION['Apple'])){
			$_SESSION['Apple'] = $_POST['apple'];
		} else {
			$_SESSION['Apple'] += $_POST['apple'];
		}
	}
	if (!empty($_POST['banana'])){
		if(!isset($_SESSION['Banana'])){
			$_SESSION['Banana'] = $_POST['banana'];
		} else {
			$_SESSION['Banana'] += $_POST['banana'];
		}
	}
	if (!empty($_POST['kiwi'])){
		if(!isset($_SESSION['Kiwi'])){
			$_SESSION['Kiwi'] = $_POST['kiwi'];
		} else {
			$_SESSION['Kiwi'] += $_POST['kiwi'];
		}
	}
	if (!empty($_POST['orange'])){
		if(!isset($_SESSION['Orange'])){
			$_SESSION['Orange'] = $_POST['orange'];
		} else {
			$_SESSION['Orange'] += $_POST['orange'];
		}
	}
	if (!empty($_POST['peach'])){
		if(!isset($_SESSION['Peach'])){
			$_SESSION['Peach'] = $_POST['peach'];
		} else {
			$_SESSION['Peach'] += $_POST['peach'];
		}
	}
	if (!empty($_POST['pear'])){
		if(!isset($_SESSION['Pear'])){
			$_SESSION['Pear'] = $_POST['pear'];
		} else {
			$_SESSION['Pear'] += $_POST['pear'];
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
				<img src="POS design/fruits/apple.jpg" alt="Apple"/><br/>
				Quantity <select name="apple">
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
				<img src="POS design/fruits/banana.jpg" alt="Banana"/><br/>
				Quantity <select name="banana">
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
				<img src="POS design/fruits/kiwi.jpg" alt="Kiwi"/><br/>
				Quantity <select name="kiwi">
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
		<tr>
			<td>
			<form method="POST" action="">
				<img src="POS design/fruits/orange.jpeg" alt="Orange"/><br/>
				Quantity <select name="orange">
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
				<img src="POS design/fruits/peach.png" alt="Peach"/><br/>
				Quantity <select name="peach">
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
				<img src="POS design/fruits/pear.jpg" alt="Pear"/><br/>
				Quantity <select name="pear">
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