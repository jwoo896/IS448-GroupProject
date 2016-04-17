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
			<form method="POST" action="" style="display:inline;">
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
			<form method="POST" action="fruitsmenu.php" style="display:inline;">
					<input type="hidden" name="moreRequested" value="019" />
			 		<input type="submit" value="Request more" style="display:inline;"/>

			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="019" />
			 		<input type="submit" value="Request more" style="display:inline;"/>				
			</form>

			</form>
			</td>

			<td>

			<form method="POST" action="fruitsmenu.php" style="display:inline;">

			<form method="POST" action="" style="display:inline;">

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
			<form method="POST" action="fruitsmenu.php" style="display:inline;">
					<input type="hidden" name="moreRequested" value="020" />
			 		<input type="submit" value="Request more" style="display:inline;"/>
			</form>
			</td>
			<td>

			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="020" />
			 		<input type="submit" value="Request more" style="display:inline;"/>				
			</form>
			</form>
			</td>
			<td>
			<form method="POST" action="" style="display:inline;">

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
			<form method="POST" action="fruitsmenu.php" style="display:inline;">
					<input type="hidden" name="moreRequested" value="021" />
			 		<input type="submit" value="Request more" style="display:inline;"/>

			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="021" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	
			</form>

			</form>
			</td>
		</tr>
		<tr>
			<td>

			<form method="POST" action="fruitsmenu.php" style="display:inline;">

			<form method="POST" action="" style="display:inline;">

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
			<form method="POST" action="fruitsmenu.php" style="display:inline;">
					<input type="hidden" name="moreRequested" value="022" />
			 		<input type="submit" value="Request more" style="display:inline;"/>
			</form>
			</td>
			<td>
			<form method="POST" action="fruitsmenu.php" style="display:inline;">

			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="022" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	
			</form>
			</form>
			</td>
			<td>
			<form method="POST" action="" style="display:inline;">

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
			<form method="POST" action="fruitsmenu.php" style="display:inline;">
					<input type="hidden" name="moreRequested" value="023" />
			 		<input type="submit" value="Request more" style="display:inline;"/>
			</form>
			</td>
			<td>
			<form method="POST" action="fruitsmenu.php" style="display:inline;">

			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="023" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	
			</form>
			</form>
			</td>
			<td>
			<form method="POST" action="" style="display:inline;">

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

			<form method="POST" action="fruitsmenu.php" style="display:inline;">
					<input type="hidden" name="moreRequested" value="024" />
			 		<input type="submit" value="Request more" style="display:inline;"/>

			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="024" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	

			</form>
			</form>
			</td>
		</tr>
	</table>
</div>
</div>
</body>
</html>