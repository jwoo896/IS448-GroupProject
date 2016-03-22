<?php 
	session_start();
	$_SESSION[''];
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
		//drinks menu items
		$deerpark = $_POST['deerpark'];
		$canadadry = $_POST['canadadry'];
		$izze = $_POST['izze'];
		$pepsi = $_POST['pepsi'];
		$rootbeer = $_POST['rootbeer'];
		$sprite = $_POST['sprite'];

		//chips menu items
		$cheetos = $_POST['cheetos'];
		$doritos = $_POST['doritos'];
		$fritos = $_POST['fritos'];
		$funyuns = $_POST['funyuns'];
		$lays = $_POST['lays'];
		$sunchips = $_POST['sunchips'];

		//granolabars menu items
		$cliffbar = $_POST['cliffbar'];
		$fiberone = $_POST['fiberone'];
		$quakerbar = $_POST['quakerbar'];
		$kashibar = $_POST['kashibar'];
		$kindbar = $_POST['kindbar'];
		$naturevalley = $_POST['naturevalley'];

		//fruits menu items
		$apple = $_POST['apple'];
		$banana = $_POST['banana'];
		$kiwi = $_POST['kiwi'];
		$orange = $_POST['orange'];
		$peach = $_POST['peach'];
		$pear = $_POST['pear'];
		
		//cookies menu items
		$chipsahoy = $_POST['chipsahoy'];
		$famousamos = $_POST['famousamos'];
		$nillawafers = $_POST['nillawafers'];
		$nutterbutter = $_POST['nutterbutter'];
		$nuttybars = $_POST['nuttybars'];
		$oreo = $_POST['oreo'];
			
		//yogurt menu itmes
		$chobani = $_POST['chobani'];
		$dannon = $_POST['dannon'];

		//empty array
		$drinkscart = array();
		$chipscart = array();
		$granolacart = array();
		$fruitscart = array();
		$cookiescart = array();
		$yogurtcart = array();
		//$itemNames=array();

		//drinkscart generation
		if (!empty($deerpark)){
			$deerparkQuantity = $deerpark[0];
			$drinkscart["deerpark"] = $deerparkQuantity;
			$_SESSION['drinks']=$drinkscart;
		}
		if (!empty($canadadry)){
			$canadadryQuantity = $canadadry[0];
			$drinkscart["canadadry"] = $canadadryQuantity;
			
		}
		if (!empty($izze)){
			$izzeQuantity = $izze[0];
			$drinkscart["izze"] = $izzeQuantity;
		}
		
		if (!empty($pepsi)){
			$pepsiQuantity = $pepsi[0];
			$drinkscart["pepsi"] = $pepsiQuantity;
		}
		if (!empty($rootbeer)){
			$rootbeerQuantity = $rootbeer[0];
			$drinkscart["rootbeer"] = $rootbeerQuantity;
		}
		if (!empty($sprite)){
			$spriteQuantity = $sprite[0];
			$drinkscart["sprite"] = $spriteQuantity;
		}
		
		//chipscart generation
		if (!empty($cheetos)){
			$cheetosQuantity = $cheetos[0];
			$chipscart["cheetos"] = $cheetosQuantity;
		}
		if (!empty($doritos)){
			$doritosQuantity = $doritos[0];
			$chipscart["doritos"] = $doritosQuantity;
		}
		if (!empty($fritos)){
			$fritosQuantity = $fritos[0];
			$cart["fritos"] = $fritosQuantity;
		}
		if (!empty($funyuns)){
			$funyunsQuantity = $funyuns[0];
			$chipscart["funyuns"] = $funyunsQuantity;
		}
		if (!empty($lays)){
			$laysQuantity = $lays[0];
			$chipscart["lays"] = $laysQuantity;
		}
		if (!empty($sunchips)){
			$sunchipsQuantity = $sunchips[0];
			$chipscart["sunchips"] = $sunchipsQuantity;
		}

		//granolacart generation
		if (!empty($cliffbar)){
			$cliffbarQuantity = $cliffbar[0];
			$granolacart["cliffbar"] = $cliffbarQuantity;
		}
		if (!empty($fiberone)){
			$fiberoneQuantity = $fiberone[0];
			$granolacart["fiberone"] = $fiberoneQuantity;
		}
		if (!empty($quakerbar)){
			$quakerbarQuantity = $quakerbar[0];
			$granolacart["quakerbar"] = $quakerbarQuantity;
		}
		if (!empty($kashibar)){
			$kashibarQuantity = $kashibar[0];
			$granolacart["kashibar"] = $kashibarQuantity;
		}
		if (!empty($kindbar)){
			$kindbarQuantity = $kindbar[0];
			$granolacart["kindbar"] = $kindbarQuantity;
		}
		if (!empty($naturevalley)){
			$naturevalleyQuantity = $naturevalley[0];
			$granolacart["naturevalley"] = $naturevalleyQuantity;
		}

		//fruitscart generation
		if (!empty($apple)){
			$appleQuantity = $apple[0];
			$fruitscart["apple"] = $appleQuantity;
		}
		if (!empty($banana)){
			$bananaQuantity = $banana[0];
			$fruitscart["banana"] = $bananaQuantity;
		}
		if (!empty($kiwi)){
			$kiwiQuantity = $kiwi[0];
			$fruitscart["kiwi"] = $kiwiQuantity;
		}
		if (!empty($orange)){
			$orangeQuantity = $orange[0];
			$fruitscart["orange"] = $orangeQuantity;
		}
		if (!empty($peach)){
			$peachQuantity = $peach[0];
			$fruitscart["peach"] = $peachQuantity;
		}
		if (!empty($pear)){
			$pearQuantity = $pear[0];
			$fruitscart["pear"] = $pearQuantity;
		}

		//cookiescart generation
		if (!empty($chipsahoy)){
			$chipsahoyQuantity = $chipsahoy[0];
			$cookiescart["chipsahoy"] = $chipsahoyQuantity;
		}
		if (!empty($famousamos)){
			$famousamosQuantity = $famousamos[0];
			$cookiescart["famousamos"] = $famousamosQuantity;
		}
		if (!empty($nillawafers)){
			$nillawafersQuantity = $nillawafers[0];
			$cookiescart["nillawafers"] = $nillawafersQuantity;
		}
		if (!empty($nutterbutter)){
			$nutterbutterQuantity = $nutterbutter[0];
			$cookiescart["nutterbutter"] = $nutterbutterQuantity;
		}
		if (!empty($nuttybars)){
			$nuttybarsQuantity = $nuttybars[0];
			$cookiescart["nuttybars"] = $nuttybarsQuantity;
		}
		if (!empty($oreo)){
			$oreoQuantity = $oreo[0];
			$cookiescart["oreo"] = $oreoQuantity;
		}

		//yogurtcart generation
		if (!empty($chobani)){
			$chobaniQuantity = $chobani[0];
			$yogurtcart["chobani"] = $chobaniQuantity;
		}
		if (!empty($dannon)){
			$dannonQuantity = $dannon[0];
			$yogurtcart["dannon"] = $dannonQuantity;
		}
	?>
	
</body>
</html>