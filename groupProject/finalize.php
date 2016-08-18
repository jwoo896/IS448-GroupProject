<?php
	session_start();
	//write items of each category to file IF user hits confirm
	require_once("libs.php");
	include ('cart.php');
	$pin = $_SESSION['pin'];
 
 	$totalUpModal = 0;
	function totalUpModal($p){
			global $totalUpModal;
			$totalUpModal += $p;
	}
	function totalUpTax($t){
		global $totalUpModal;
		$tax = $totalUpModal * .06;
		$totalUpTax = $totalUpModal + $tax;
		return $totalUpTax;
	}

	function writeToFile(){
		global $totalUpModal;
		$filevar = fopen("groupProject/receipts.txt", "a+") or die ("Could not find file.");
		flock($filevar, LOCK_EX);
		fwrite($filevar, "$_SESSION[User]\n");
		flock($filevar, LOCK_UN);
		fclose($filevar);
	
			foreach($_SESSION as $item => $quantity){
			if ($item != 'auth' && $item != 'User' && $item != 'pin' && $item != 'permission'){
				$filevar = fopen("receipts.txt", "a+") or die ("Could not find file.");
				$strq = strval($quantity);
				flock($filevar, LOCK_EX);
				fwrite($filevar, "Item: $item, ");
				fwrite($filevar, "QTY: $strq, ");
				$price = calc($item, $quantity);
				$strp = strval($price);
				fwrite($filevar, "Price: $strp\n");
				flock($filevar, LOCK_UN);
				fclose($filevar);
				totalUpModal($price);
			}
		}
		$totalWtax = totalUpTax($totalUpModal);
		$strt = strval($totalWtax);
		$filevar = fopen("receipts.txt", "a+") or die ("Could not find file.");
		flock($filevar, LOCK_EX);
		fwrite($filevar, "Total: $strt\n"); 
		flock($filevar, LOCK_UN);
		fclose($filevar);
}

	$conn = connect();
	$dvar = mysql_fetch_array(mysql_query("SELECT debt FROM user_login WHERE pin = $pin"));
	$uvar = $dvar['debt'] + $totalUp;
	$uqry = "UPDATE user_login SET debt = $uvar WHERE pin = $pin";
	mysql_query($uqry);

	$qvar = mysql_fetch_array(mysql_query("SELECT productName, quantity FROM inventory"));
	foreach ($_SESSION as $item => $quantity) {
		if ($item != 'auth' && $item != 'User' && $item != 'pin' && $item != 'permission'){
			if ($qvar['productName'] = $item){
				$quvar = $qvar['quantity'] - $quantity;
				mysql_query("UPDATE inventory SET quantity = $quvar WHERE productName = '$item'");
			}
		}
	}	
	
	disconnect($conn);



	writeToFile();	

?>
<!--Use case 3. Written by Jae Woo-->
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