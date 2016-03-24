<?php 
	session_start();
	$_SESSION['deerpark'] = $_POST['deerpark'];
	$_SESSION['']=$_POST[''];
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