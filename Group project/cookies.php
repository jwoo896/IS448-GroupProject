<?php
	session_start();
	require_once("libs.php");
	if (!empty($_POST['chipsahoy'])){
		if(!isset($_SESSION['Chips Ahoy'])){
			$_SESSION['Chips Ahoy'] = $_POST['chipsahoy'];
		} else {
			$_SESSION['Chips Ahoy'] += $_POST['chipsahoy'];
		}
	}
	if (!empty($_POST['famousamos'])){
		if(!isset($_SESSION['Famous Amos'])){
			$_SESSION['Famous Amos'] = $_POST['famousamos'];
		} else {
			$_SESSION['Famous Amos'] += $_POST['famousamos'];
		}
	}
	if (!empty($_POST['nillawafers'])){
		if(!isset($_SESSION['Nilla Wafers'])){
			$_SESSION['Nilla Wafers'] = $_POST['nillawafers'];
		} else {
			$_SESSION['Nilla Wafers'] += $_POST['nillawafers'];
		}
	}
	if (!empty($_POST['nutterbutter'])){
		if(!isset($_SESSION['Nutter Butters'])){
			$_SESSION['Nutter Butters'] = $_POST['nutterbutter'];
		} else {
			$_SESSION['Nutter Butters'] += $_POST['nutterbutter'];
		}
	}
	if (!empty($_POST['nuttybars'])){
		if(!isset($_SESSION['Nutty Bars'])){
			$_SESSION['Nutty Bars'] = $_POST['nuttybars'];
		} else {
			$_SESSION['Nutty Bars'] += $_POST['nuttybars'];
		}
	}
	if (!empty($_POST['oreo'])){
		if(!isset($_SESSION['Oreos'])){
			$_SESSION['Oreos'] = $_POST['oreo'];
		} else {
			$_SESSION['Oreos'] += $_POST['oreo'];
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
			<form method="POST" action="" style="display:inline;">

				<img src="POS design/cookies/chipsahoy.jpg" alt="Chips Ahoy"/><br/>
				Quantity <select name="chipsahoy">
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
			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="025" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	
			</form>
			</td>

			<td>
			<form method="POST" action="" style="display:inline;">

				<img src="POS design/cookies/famousamos.jpeg" alt="Famous Amos"/><br/>
				Quantity <select name="famousamos">
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
			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="026" />
			 		<input type="submit" value="Request more" style="display:inline;"/>	
			</form>
			</td>
			<td>
			<form method="POST" action="" style="display:inline;">

				<img src="POS design/cookies/nillawafers.jpg" alt="Nilla Wafers"/><br/>
				Quantity <select name="nillawafers">
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
			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="027" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	
			</form>
			</td>
		</tr>
		<tr>
			<td>
			<form method="POST" action="" style="display:inline;">

				<img src="POS design/cookies/nutterbutter.jpg" alt="Nutter Butter"/><br/>
				Quantity <select name="nutterbutter">
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
			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="028" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	
			</form>
			
			</td>
			<td>
			<form method="POST" action="" style="display:inline;">

				<img src="POS design/cookies/nuttybars.jpg" alt="Nutty Bars"/><br/>
				Quantity <select name="nuttybars">
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
			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="029" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	
			</form>
			</td>
			<td>
			<form method="POST" action="" style="display:inline;">
				<img src="POS design/cookies/oreos.jpg" alt="Oreo"/><br/>
				Quantity <select name="oreo">
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
			<form method="POST" action="" style="display:inline;">
					<input type="hidden" name="moreRequested" value="030" />
					<input type="submit" value="Request more" style="display:inline;"/>				 	
			</form>
			</td>
		</tr>
	</table>
</div>
</div>
</body>
</html>