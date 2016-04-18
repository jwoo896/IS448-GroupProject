<?php
 	require_once("libs.php");
	//credCheck();
//session_destroy();
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
		if(!empty($_POST['completedRequest'])){
			$itemNum = intval($_POST['completedRequest']);
			$conn = connect();
			$sql = "UPDATE inventory SET quantity = restock_quantity WHERE product_id='$itemNum'";
			$result = mysql_query($sql);
			$sql = "UPDATE inventory SET requested=0 WHERE product_id='$itemNum'";
			$result = mysql_query($sql);
			disconnect($conn); 
			unset($_POST['completedRequest']);?>
			onload="openModal();"<?php
		}?>
>
	<div id="divWrapper">
	<div id="divHeader">
	  <div id="divImageHead">
				<img src="POS design/adgcreativeicon.png" alt="ADG Creative Icon" height="100"/>
		</div>
		<!--create a selector for positioning of top "menu" items. Possibly add styling to the fonts.-->
		<div id="divMenu">
			<div id="menuPosition">
			<ul>
				<li ><a href="categoriesPage.html" >Categories</a></li>
				<li><a href="contact.html" >Contact</a></li>
				<li><a href="logout.php" >Logout</a></li>
				<li><a href="checkout.html" >Cart</a></li>
			</ul>
			</div>
		</div>
	</div>
	<div id="divBody">
		<?php
			$conn = connect();
			$sql = "SELECT `productName`, `product_id`, `quantity`  FROM `inventory` WHERE requested = 1";
			$result = mysql_query($sql) or die(mysql_error);
			if(($result)|| (mysql_errno == 0))
			{
				echo "<h3>Requested Items</h3>";
				echo "<table class='tableStriped'><tr>";
				if(mysql_num_rows($result)>0)
				{
					$i = 0;
					while($i < mysql_num_fields($result))
					{
						echo "<th style='background:white;'>". mysql_field_name($result,$i) . "</th>";
						$i++;
					}
					echo "</tr>";
					while($rows = mysql_fetch_array($result,MYSQL_ASSOC))
					{
						$n = 0;
						echo "<tr>";
						foreach($rows as $data)
						{
								echo "<td>". $data . "</td>";
							
						}
						foreach($rows as $data)
						{
							if($n == 1) {
								echo "<td>
										<form method='POST' action='admin.php'>
										<input type='hidden' value='" . $data . "' name='completedRequest'/>
										<input type='submit' value='Complete Request'/>
								</form>
									</td>";
							}
							$n++;
						}
					}
				}
				else{
					echo "<tr><td colspan='" . ($i+1) . "'>No requested Items</td></tr>";
				}
				echo "</table>";
			}
			disconnect($conn);
		?>
	</div>
</body>
</html>
