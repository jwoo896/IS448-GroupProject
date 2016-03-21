<?php include 'drinkscart.php'; ?>
<?php
	session_start();
	if(isset($_SESSION["visits"])){
		foreach($cartq as $index=>$item){
				setcookie($index, $item);
		}
		$_SESSION["visits"]++;
	}else {
		$_SESSION["visits"]=1;
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
	<table>
		<tr>
			<td>
			<form method="POST" action="">
				<img src="POS design/drinks/deerpark.jpg" alt="Deer Park"/><br/>
				Quantity <select name="deerpark">
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
				<img src="POS design/drinks/canadadry.png" alt="Canada Dry"/><br/>
				Quantity <select name="canadadry">
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
				<img src="POS design/drinks/izze.jpg" alt="Izze"/><br/>
				Quantity <select name="izze">
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
				<img src="POS design/drinks/pepsi.jpg" alt="Pepsi"/><br/>
				Quantity <select name="pepsi">
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
				<img src="POS design/drinks/rootbeer.jpg" alt="Root Beer"/><br/>
				Quantity <select name="rootbeer">
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
				<img src="POS design/drinks/sprite.png" alt="Sprite"/><br/>
				Quantity <select name="Sprite">
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
</body>
</html>