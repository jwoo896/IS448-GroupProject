<!doctype html>
<html>
<head>
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
			$deerparktotal=($deerpark[0]*.50);
			array_push($cartq, "deerpark"=>$deerparktotal);
			array_push($itemNames, "Deer Park");
		}
		if (!empty($dpepsi)){
			$dpepsitotal=($dpepsi[0]*.75);
			array_push($cartq, "dpepsi"=>$dpepsitotal);
			array_push($itemNames, "Diet Pepsi");
		}
	?>
	
</body>
</html>