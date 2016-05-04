<?php
	require_once("libs.php");
	$prodId = $_GET['item'];
	$conn = connect();
	$sql = "UPDATE inventory SET quantity = restock_quantity WHERE product_id='$prodId'";
	$result = mysql_query($sql);
	$sql = "UPDATE inventory SET requested=0 WHERE product_id='$prodId'";
	$result = mysql_query($sql);
	disconnect($conn); 
	echo "$prodId";

?>
