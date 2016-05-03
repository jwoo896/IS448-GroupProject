<?php
	session_start();
	require_once("libs.php");
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
			<form method="POST" action="fruitsmenu.php" style="display:inline;">
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
				 	<input type="submit" value="Add" style="display:inline;"/>
				 <!--create a new php file for this? or add to cartphp?-->
			</form>
			<input type="submit" value="Request more" style="display:inline;" onclick="showModal('019');"/>			
			</td>

			<td>
			<form method="POST" action="fruitsmenu.php" style="display:inline;">
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
			</form>
			<input type="submit" value="Request more" style="display:inline;" onclick="showModal('020');"/>
			</td>
			<td>
			<form method="POST" action="fruitsmenu.php" style="display:inline;">
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
			</form>
			<input type="submit" value="Request more" style="display:inline;" onclick="showModal('021');"/>
			</td>
		</tr>
		<tr>
			<td>
			<form method="POST" action="fruitsmenu.php" style="display:inline;">
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
				</form>
			<input type="submit" value="Request more" style="display:inline;" onclick="showModal('022');"/>
			</td>
			<td>
			<form method="POST" action="fruitsmenu.php" style="display:inline;">
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
				</form>
			<input type="submit" value="Request more" style="display:inline;" onclick="showModal('023');"/>
			</td>
			<td>
			<form method="POST" action="fruitsmenu.php" style="display:inline;">
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
			</form>
			<input type="submit" value="Request more" style="display:inline;" onclick="showModal('024');"/>
			</td>
		</tr>
	</table>
</div>
</div>
</body>
</html>