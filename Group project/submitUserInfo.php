<?php
	/*
	** Author: Josh Standiford
	** Date Modified: 3/23/2016
	** Description: A unique ID is created on this page and inserted into the database with selected credentials
	*/
	session_start();

	$_SESSION["validFN"] = "";
	$_SESSION["validLN"] = "";
	if(preg_match("/[a-zA-Z]+/",$_POST["firstName"])){
		$_SESSION["validFN"] = false;
	}
	else{
		$_SESSION["validFN"] = true;
	}
	if(preg_match("/[a-zA-Z]+/",$_POST["lastName"])){
		$_SESSION["validLN"] = false;
	}
	else{
		$_SESSION["validLN"] = true;
	}
	if($_SESSION["validFN"] || $_SESSION["validLN"])
	{
		header("Location:addUser.php");
	}
	else{
		$valid = true;
	}

	require_once("libs.php");
	$conn = connect();



	/* Preconditions: first, last must be valid A-Z 
	** Postconditions: unique ID is returned
	** Desc: A first and last name are passed into the function. Then 3 random numbers are 
	** generated.  This pin is checked through a database until a unique pin is created.
	*/
	function generateUniqueID($first, $last){
		
		for($i = 0; $i < 3; $i++){
			$num .= rand(0,9);
		}

		$first = substr($first,0,1);

		if(strlen($last) >= 3){
			$last = substr($last,0,3);
		}

		return $first . $last . $num;
	}


	$position = $_POST["position"];
	$firstName = htmlspecialchars(strtolower($_POST["firstName"]));
	$lastName = htmlspecialchars(strtolower($_POST["lastName"]));

	do{
		$ID = generateUniqueID($firstName, $lastName);
	}
	while(mysql_num_rows(mysql_query("SELECT * FROM user_login WHERE pin = '$ID'")) != 0 );

	$query = "INSERT INTO user_login(pin, permissions, debt, first_name, last_name) VALUES ('$ID','$position','0','$firstName','$lastName')";
	
	if($valid){
		mysql_query($query);
	}
	disconnect($conn);

	//header("Location:categoriesPage.php");
?>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function successfulReg(){
			alert("Registration was a success!");
		}
		successfulReg();
	</script>
</head>
<body>
	<?php  echo("$ID <br>") ?>
	<!--Content 5 is # of seconds before redirect-->
	<meta http-equiv="Refresh" content="5;url=categoriesPage.php" />
</body>
</html>
