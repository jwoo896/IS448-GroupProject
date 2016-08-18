<?php
	require_once("libs.php");
	credCheck();

			$conn = connect();

		$constructed_query = "UPDATE user_login SET `debt` = '0'";
		$select = mysql_query($constructed_query);
		if (!$select){
  		echo "select query failed";
			}

		disconnect($conn);
	 ?>
