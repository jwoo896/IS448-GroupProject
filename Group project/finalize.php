<?php
	session_start();
	//write items of each category to file IF user hits confirm
	require_once("libs.php");
	include ('cart.php');
	$pin = $_SESSION['pin'];

	function writeToFile(){

		foreach($_SESSION as $item => $quantity){

			if ($item == 'User'){
				$filevar = fopen("/afs/umbc.edu/users/j/w/jwoo2/pub/php-files/receipts.txt", "a+") or die ("Could not find file.");
				flock($filevar, LOCK_EX);
				fwrite($filevar, "$quantity, ");
				flock($filevar, LOCK_UN);
				fclose($filevar);
			}
			if ($item != 'auth' && $item != 'User' && $item != 'pin'){
				$filevar = fopen("/afs/umbc.edu/users/j/w/jwoo2/pub/php-files/receipts.txt", "a+") or die ("Could not find file.");
				$strq = strval($quantity);
				flock($filevar, LOCK_EX);
				fwrite($filevar, "Item: $item, ");
				fwrite($filevar, "QTY: $strq, ");
				$price = calc($item, $quantity);
				$strp = strval($price);
				fwrite($filevar, "Price: $strp\n");
				flock($filevar, LOCK_UN);
				fclose($filevar);
				totalUp($price);
				
			}
		$strt = strval($totalUp);
		$filevar = fopen("/afs/umbc.edu/users/j/w/jwoo2/pub/php-files/receipts.txt", "a+") or die ("Could not find file.");
		flock($filevar, LOCK_EX);
		fwrite($filevar, "Total: $strt\n"); 
		flock($filevar, LOCK_UN);
		fclose($filevar);
		}
	}

	$conn = connect();
	$dvar = mysql_fetch_array(mysql_query("SELECT debt FROM user_login WHERE pin = $pin"));
	$uvar = $dvar['debt'] + $totalUp;
	$uqry = "UPDATE user_login SET debt = $uvar WHERE pin = $pin";
	mysql_query($uqry);
	disconnect($conn);

	writeToFile();	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title> ADG Creative Cafe </title>
	<link rel="stylesheet" type="text/css" href="styles.css"/>
	<script type="text/javascript" src="POS.js"></script>
</head>
<body>
	<div id="divBody">
		Thank you for your purchase!
	</div>
</div>
</body>
</html>