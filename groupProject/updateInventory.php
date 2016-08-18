<?php
	require_once("libs.php");
	$prodId = $_GET['item'];
	$conn = connect();
	$sql = "UPDATE inventory SET requested=1 WHERE product_id='$prodId'";
	$result = mysql_query($sql);
	disconnect($conn);
	echo "$prodId";
?>