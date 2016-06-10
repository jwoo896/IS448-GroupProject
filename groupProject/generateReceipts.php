<?php
	require_once("libs.php");
	credCheck();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title> ADG Creative Cafe </title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.0.3/prototype.js"</script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.2/scriptaculous.js"></script>
	<script type="text/javascript" src="POS.js">
	</script>
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
			<li><a href="categoriesPage.php">Categories</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="logout.php">Logout</a></li>
		<li><a href="cart.php">Cart</a></li>
		<li><a href="generateReceipts.php">Receipts</a></li>
		</ul>
		</div>
	</div>

	<p>
	<hr/>
	</p>
	<div id="divBody">

	 	<?php
		/*$db_login = "jstand1";
		$db = mysql_connect("studentdb-maria.gl.umbc.edu",$db_login,$db_login);

		if(!$db)
			exit("Error - could not connect to MySQL");

		$er = mysql_select_db($db_login);
		if(!$er)
			exit("Error - could not select the user database");*/

			$conn = connect();

		$constructed_query = "SELECT `first_name` , `last_name` , `debt` FROM user_login";
		$numberOfPosts = mysql_num_rows(mysql_query($constructed_query));
		$select = mysql_query($constructed_query);
		if (!$numberOfPosts){
  		echo "select query failed";
			}

    echo "<table><tr><td><b>First Name</b></td><td><b>Last Name</b></td><td><b>Debt</b></td></tr></table>";
		echo "<table class = 'tableStriped' id = 'debtTable'>";
		$rowID = 1;

			for ($row_num = 1; $row_num <= $numberOfPosts; $row_num++){
	  	$row_array = mysql_fetch_array($select);
	?>
	    	<tr id= <?php echo $rowID;?>
					onmouseover="javascript:highlightTableRow(<?php echo $rowID; ?>, '#ffff88');"
					onmouseout="javascript:unhighlightTableRow(<?php echo $rowID; ?>);">
				<td>
	      	<?php print("$row_array[first_name]");?>
				</td>
				<td>
	      	<?php print("$row_array[last_name]");?>
				</td>
				<td>
	      	<div id = <?php echo $rowID.C; ?>>
						<?php print("$row_array[debt]");?>
					</div>
				</td>

			</tr>
<?php
		$rowID = $rowID + 1;
			}

		echo "</table>";

		disconnect($conn);
	 ?>
		<!--This PHP clears all employee debt
		<form method="POST" action="sendUserData.php">
		<input type="submit" value="Submit"/> -->

<br/>

			<input type="button" onclick="debtClear()" value ="Clear Debt"></input>
	</div>
</div>


</body>
</html>
