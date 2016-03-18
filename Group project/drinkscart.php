<?php
	setcookie("cartqueue", $cartq);	
	foreach ($_COOKIE["cartqueue"] as $index=>$cartitem){
		echo "$index: $cartitem";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title> ADG Creative Cafe </title>
	<link rel="stylesheet" type="text/css" href="styles.css"/>
	<script type="text/javascript" src="POS.js"></script>
</head>
<body>
	<?php
		/*drinks menu items*/
		$deerpark = $_POST['deerpark'];
		$canadadry = $_POST['canadadry'];
		$izze = $_POST['izze'];
		$pepsi = $_POST['pepsi'];
		$rootbeer = $_POST['rootbeer'];
		$sprite = $_POST['sprite'];

		//empty array
		$cartq=array();
		$itemNames=array();

		if (!empty($deerpark)){
			$deerparkQuantity=$deerpark[0];
			$deerparktotal=($deerparkQuantity * 0.50);
			$cartq["deerpark"]=$deerparktotal;
			array_push($itemNames, "Deer Park");

		}
		if (!empty($canadadry)){
			$canadadryQuantity = $canadadry[0];
			$canadadrytotal=($canadadryQuantity * 0.75);
			$cartq["canadadry"]=$canadadrytotal;
			array_push($itemNames, "Canada Dry");
		}
	?>
	
</body>
</html>