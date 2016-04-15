<?php
	session_start();
	require_once("libs.php");
	if (!empty($_POST['cliffbar'])){
		if(!isset($_SESSION['Cliffbar'])){
			$_SESSION['Cliffbar'] = $_POST['cliffbar'];
		} else {
			$_SESSIOn['Cliffbar'] += $_POST['cliffbar'];
		}
	}
	if (!empty($_POST['fiberone'])){
		if(!isset($_SESSION['Fiberone'])){
			$_SESSION['Fiberone'] = $_POST['fiberone'];
		} else {
			$_SESSION['Fiberone'] = $_POST['fiberone'];
		}
	}
	if (!empty($_POST['quakerbar'])){
		if(!isset($_SESSION['Quaker Bar'])){
			$_SESSION['Quaker Bar'] = $_POST['quakerbar'];
		} else {
			$_SESSION['Quaker Bar'] += $_POST['quakerbar'];
		}
	}
	if (!empty($_POST['kashibar'])){
		if(!isset($_SESSION['Kashibar'])){
			$_SESSION['Kashibar'] = $_POST['kashibar'];
		} else {
			$_SESSION['Kashibar'] += $_POST['kashibar'];
		}
	}
	if (!empty($_POST['kindbar'])){
		if(!isset($_SESSION['Kindbar'])){
			$_SESSION['Kindbar'] = $_POST['kindbar'];
		} else {
			$_SESSION['Kindbar'] += $_POST['kindbar'];
		}
	}
	if (!empty($_POST['naturevalley'])){
		if(!isset($_SESSION['Nature Valley'])){
			$_SESSION['Nature Valley'] = $_POST['naturevalley'];
		} else {
			$_SESSION['Nature Valley'] += $_POST['naturevalley'];
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
</head>
<body>
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
			<form method="POST" action="" style="display:inline;">

				<img src="POS design/granolabars/cliffbar.png" alt="Cliff Bar"/><br/>
				Quantity <select name="cliffbar">
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
			</form>
				 <!--create a new php file for this? or add to cartphp?-->
			<form method="POST" action="granolaBars.php" style="display:inline;">
					<input type="hidden" name="moreRequested" value="013" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	

			</form>
			</td>

			<td>
			<form method="POST" action="" style="display:inline;">

				<img src="POS design/granolabars/fiberone.jpg" alt="Fiber One"/><br/>
				Quantity <select name="fiberone">
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
			</form>
				 <!--create a new php file for this? or add to cartphp?-->
			<form method="POST" action="granolaBars.php" style="display:inline;">
					<input type="hidden" name="moreRequested" value="014" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	

			</form>
			</td>
			<td>
			<form method="POST" action="" style="display:inline;">

				<img src="POS design/granolabars/quakerbar.jpg" alt="Quaker Bar"/><br/>
				Quantity <select name="quakerbar">
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
			</form>
				 <!--create a new php file for this? or add to cartphp?-->
			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="015" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	

			</form>
			</td>
		</tr>
		<tr>
			<td>
			<form method="POST" action="" style="display:inline;">

				<img src="POS design/granolabars/kashibar.png" alt="Kashi Bar"/><br/>
				Quantity <select name="kashibar">
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
			</form>
				 <!--create a new php file for this? or add to cartphp?-->
			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="016" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	

			</form>
			</td>
			<td>
			<form method="POST" action="" style="display:inline;">

				<img src="POS design/granolabars/kindbar.png" alt="Kind Bar"/><br/>
				Quantity <select name="kindbar">
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
			</form>
				 <!--create a new php file for this? or add to cartphp?-->
			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="017" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	

			</form>
			</td>
			<td>
			<form method="POST" action="" style="display:inline;">

				<img src="POS design/granolabars/naturevalley.jpg" alt="Nature Valley"/><br/>
				Quantity <select name="naturevalley">
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
			</form>
				 <!--create a new php file for this? or add to cartphp?-->
			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="018" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	

			</form>
			</td>
		</tr>
	</table>
</div>
</div>
</body>
</html>