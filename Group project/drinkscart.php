<!doctype html>
<html>
<head>
</head>
<body>
	<?php
		/*drinks menu items*/
		$pepsi=$_POST['pepsi'];
		$dpepsi=$_POST['dietpepsi'];

		//empty array
		$cartq=array();
		$itemNames=array();

		if (!empty($pepsi)){
			$pepsitotal=($pepsi[0]*.75);
			array_push($cartq, "pepsi"=>$pepsitotal);
			array_push($itemNames, "Pepsi");
		}
		if (!empty($dpepsi)){
			$dpepsitotal=($dpepsi[0]*.75);
			array_push($cartq, "dpepsi"=>$dpepsitotal);
			array_push($itemNames, "Diet Pepsi");
		}
	?>
	
</body>
</html>