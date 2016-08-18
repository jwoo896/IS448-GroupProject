<?php
/*DON'T ACTUALLY NEED THIS*/ 
session_start();
require_once("libs.php");
$item = $_POST['name'];
$num = $_POST['quantity'];
	if ($item = 'deerpark')
		if (!isset($_SESSION['Deer Park'])){
			$_SESSION['Deer Park']=$num;
		} else {
				$_SESSION['Deer Park']+= $num;
		}
	}
	if (!empty($_POST['canadadry'])){
		if(!isset($_SESSION['Canada Dry'])){
			$_SESSION['Canada Dry'] = $_POST['canadadry'];
		} else {
			$$_SESSION["Canada Dry"] += $_POST['canadadry'];
		}
	}
	if (!empty($_POST['izze'])){
		if(!isset($_SESSION['Izze'])){
			$_SESSION['Izze'] = $_POST['izze'];
		} else {
			$_SESSION['Izze'] += $_POST['izze'];
		}	
	}		
	if (!empty($_POST['pepsi'])){
		if(!isset($_SESSION['Pepsi'])){
			$_SESSION['Pepsi'] = $_POST['pepsi'];
		} else {
			$_SESSION['Pepsi'] += $_POST['pepsi'];
		}		
	}
	if (!empty($_POST['rootbeer'])){
		if(!isset($_SESSION['Root Beer'])){
			$_SESSION['Root Beer'] = $_POST['rootbeer'];
		} else {
			$_SESSION['Root Beer'] += $_POST['rootbeer'];
		}
	}
	if (!empty($_POST['sprite'])){
		if(!isset($_SESSION['Sprite'])){
			$_SESSION['Sprite'] = $_POST['sprite'];
		} else {
			$_SESSION['Sprite'] += $_POST['sprite'];
		}
	}

	if (!empty($_POST['cheetos'])){
		if(!isset($_SESSION['Cheetos'])){
			$_SESSION['Cheetos'] = $_POST['cheetos'];
		} else {
			$_SESSION['Cheetos'] += $_POST['cheetos'];
		}
	}
	if (!empty($_POST['doritos'])){
		if(!isset($_SESSION['Doritos'])){
			$_SESSION['Doritos'] = $_POST['doritos'];
		} else {
			$_SESSION['Doritos'] =+ $_POST['doritos'];
		}
	}
	if (!empty($_POST['fritos'])){
		if(!isset($_SESSION['Fritos'])){
			$_SESSION['Fritos'] = $_POST['fritos'];
		} else {
			$_SESSION['Fritos'] += $_POST['fritos'];
		}
	}
	if (!empty($_POST['funyuns'])){
		if(!isset($_SESSION['Funyuns'])){
			$_SESSION['Funyuns'] = $_POST['funyuns'];
		} else {
			$_SESSION['Funyuns'] += $_POST['funyuns'];
		}
	}
	if (!empty($_POST['lays'])){
		if(!isset($_SESSION['Lays'])){
			$_SESSION['Lays'] = $_POST['lays'];
		} else {
			$_SESSION['Lays'] += $_POST['lays'];
		}	
	}
	if (!empty($_POST['sunchips'])){
		if(!isset($_SESSION['Sunchips'])){
			$_SESSION['Sunchips'] = $_POST['sunchips'];
		} else {
			$_SESSION['Sunchips'] = $_POST['sunchips'];
		}	
	}

	if (!empty($_POST['chipsahoy'])){
		if(!isset($_SESSION['Chips Ahoy'])){
			$_SESSION['Chips Ahoy'] = $_POST['chipsahoy'];
		} else {
			$_SESSION['Chips Ahoy'] += $_POST['chipsahoy'];
		}
	}
	if (!empty($_POST['famousamos'])){
		if(!isset($_SESSION['Famous Amos'])){
			$_SESSION['Famous Amos'] = $_POST['famousamos'];
		} else {
			$_SESSION['Famous Amos'] += $_POST['famousamos'];
		}
	}
	if (!empty($_POST['nillawafers'])){
		if(!isset($_SESSION['Nilla Wafers'])){
			$_SESSION['Nilla Wafers'] = $_POST['nillawafers'];
		} else {
			$_SESSION['Nilla Wafers'] += $_POST['nillawafers'];
		}
	}
	if (!empty($_POST['nutterbutter'])){
		if(!isset($_SESSION['Nutter Butters'])){
			$_SESSION['Nutter Butters'] = $_POST['nutterbutter'];
		} else {
			$_SESSION['Nutter Butters'] += $_POST['nutterbutter'];
		}
	}
	if (!empty($_POST['nuttybars'])){
		if(!isset($_SESSION['Nutty Bars'])){
			$_SESSION['Nutty Bars'] = $_POST['nuttybars'];
		} else {
			$_SESSION['Nutty Bars'] += $_POST['nuttybars'];
		}
	}
	if (!empty($_POST['oreo'])){
		if(!isset($_SESSION['Oreos'])){
			$_SESSION['Oreos'] = $_POST['oreo'];
		} else {
			$_SESSION['Oreos'] += $_POST['oreo'];
		}
	}

	if (!empty($_POST['apple'])){
		if(!isset($_SESSION['Apple'])){
			$_SESSION['Apple'] = $_POST['apple'];
		} else {
			$_SESSION['Apple'] += $_POST['apple'];
		}
	}
	if (!empty($_POST['banana'])){
		if(!isset($_SESSION['Banana'])){
			$_SESSION['Banana'] = $_POST['banana'];
		} else {
			$_SESSION['Banana'] += $_POST['banana'];
		}
	}
	if (!empty($_POST['kiwi'])){
		if(!isset($_SESSION['Kiwi'])){
			$_SESSION['Kiwi'] = $_POST['kiwi'];
		} else {
			$_SESSION['Kiwi'] += $_POST['kiwi'];
		}
	}
	if (!empty($_POST['orange'])){
		if(!isset($_SESSION['Orange'])){
			$_SESSION['Orange'] = $_POST['orange'];
		} else {
			$_SESSION['Orange'] += $_POST['orange'];
		}
	}
	if (!empty($_POST['peach'])){
		if(!isset($_SESSION['Peach'])){
			$_SESSION['Peach'] = $_POST['peach'];
		} else {
			$_SESSION['Peach'] += $_POST['peach'];
		}
	}
	if (!empty($_POST['pear'])){
		if(!isset($_SESSION['Pear'])){
			$_SESSION['Pear'] = $_POST['pear'];
		} else {
			$_SESSION['Pear'] += $_POST['pear'];
		}
	}

	if (!empty($_POST['cliffbar'])){
		if(!isset($_SESSION['Cliffbar'])){
			$_SESSION['Cliffbar'] = $_POST['cliffbar'];
		} else {
			$_SESSIOn['Cliffbar'] += $_POST['cliffbar'];
		}
	}
	if (!empty($_POST['fiberone'])){
		if(!isset($_SESSION['Fiberone'])){
			$_SESSION['Fiberone'] = $_POST['fiberone'];
		} else {
			$_SESSION['Fiberone'] = $_POST['fiberone'];
		}
	}
	if (!empty($_POST['quakerbar'])){
		if(!isset($_SESSION['Quaker Bar'])){
			$_SESSION['Quaker Bar'] = $_POST['quakerbar'];
		} else {
			$_SESSION['Quaker Bar'] += $_POST['quakerbar'];
		}
	}
	if (!empty($_POST['kashibar'])){
		if(!isset($_SESSION['Kashibar'])){
			$_SESSION['Kashibar'] = $_POST['kashibar'];
		} else {
			$_SESSION['Kashibar'] += $_POST['kashibar'];
		}
	}
	if (!empty($_POST['kindbar'])){
		if(!isset($_SESSION['Kindbar'])){
			$_SESSION['Kindbar'] = $_POST['kindbar'];
		} else {
			$_SESSION['Kindbar'] += $_POST['kindbar'];
		}
	}
	if (!empty($_POST['naturevalley'])){
		if(!isset($_SESSION['Nature Valley'])){
			$_SESSION['Nature Valley'] = $_POST['naturevalley'];
		} else {
			$_SESSION['Nature Valley'] += $_POST['naturevalley'];
		}
	}

	if (!empty($_POST['chobani'])){
		if(!isset($_SESSION['Chobani'])){
			$_SESSION['Chobani'] = $_POST['chobani'];
		} else {
			$_SESSION['Chobani'] += $_POST['chobani'];
		}
	}
	if (!empty($_POST['dannon'])){
		if(!isset($_SESSION['Dannon'])){
			$_SESSION['Dannon'] = $_POST['dannon'];
		} else {
			$_SESSION['Dannon'] += $_POST['dannon'];
		}
	}
	$response = 'Added to cart';
	echo $response;
?>