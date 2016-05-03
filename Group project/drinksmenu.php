<?php
	session_start();
	require_once("libs.php");
	if (!empty($_POST['deerpark'])){
		if (!isset($_SESSION['Deer Park'])){
			$_SESSION['Deer Park']=$_POST['deerpark'];
		} else {
				$_SESSION['Deer Park']+= $_POST['deerpark'];
		}
	}
	if (!empty($_POST['canadadry'])){
		if(!isset($_SESSION['Canada Dry'])){
			$_SESSION['Canada Dry'] = $_POST['canadadry'];
		} else {
			$$_SESSION["Canada Dry"] += $_POST['canadadry'];
		}
	}
	if (!empty($_POST['izze'])){
		if(!isset($_SESSION['Izze'])){
			$_SESSION['Izze'] = $_POST['izze'];
		} else {
			$_SESSION['Izze'] += $_POST['izze'];
		}	
	}		
	if (!empty($_POST['pepsi'])){
		if(!isset($_SESSION['Pepsi'])){
			$_SESSION['Pepsi'] = $_POST['pepsi'];
		} else {
			$_SESSION['Pepsi'] += $_POST['pepsi'];
		}		
	}
	if (!empty($_POST['rootbeer'])){
		if(!isset($_SESSION['Root Beer'])){
			$_SESSION['Root Beer'] = $_POST['rootbeer'];
		} else {
			$_SESSION['Root Beer'] += $_POST['rootbeer'];
		}
	}
	if (!empty($_POST['sprite'])){
		if(!isset($_SESSION['Sprite'])){
			$_SESSION['Sprite'] = $_POST['sprite'];
		} else {
			$_SESSION['Sprite'] += $_POST['sprite'];
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title> ADG Creative Cafe </title>
	<link rel="stylesheet" type="text/css" href="styles.css"/>
	<script type="text/javascript" src="POS.js"></script>
	<script type="text/javascript" src="modalJs.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.0.3/prototype.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.2/scriptaculous.js" type="text/javascript"></script>

</head>
<body>
	<div id="requestedModal" class="modal" style="display:none;">
	  <!-- Modal content -->
	  <div class="modal-content2">
		<div class="modal-header">
		</div>
		<div class="modal-body2">
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
			<form method="POST" action="drinksmenu.php" style="display:inline;">
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
				 	<input type="submit" value="Add" style="display:inline;"/>
				 <!--create a new php file for this? or add to cartphp?-->
			</form>
			<input type="submit" value="Request more" style="display:inline;" onclick="showModal('001');"/>
			</td>

			<td>
			<form method="POST" action="drinksmenu.php" style="display:inline;">
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
			</form>
			<input type="submit" value="Request more" style="display:inline;" onclick="showModal('002');"/>
			</td>
			<td>
			<form method="POST" action="drinksmenu.php" style="display:inline;">
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
			</form>
			<input type="submit" value="Request more" style="display:inline;" onclick="showModal('003');"/>
			</td>
		</tr>
		<tr>
			<td>
			<form method="POST" action="drinksmenu.php" style="display:inline;">
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
			</form>
			<input type="submit" value="Request more" style="display:inline;" onclick="showModal('004');"/>
			</td>
			<td>
			<form method="POST" action="drinksmenu.php" style="display:inline;">
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
			</form>
			<input type="submit" value="Request more" style="display:inline;" onclick="showModal('005');"/>
			</td>
			<td>
			<form method="POST" action="drinksmenu.php" style="display:inline;">
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
			</form>
			<input type="submit" value="Request more" style="display:inline;" onclick="showModal('006');"/>
			</td>
		</tr>
	</table>
</div>
</div>

</body>
</html>