<?php
	session_start();
	require_once("libs.php");

		$pin = $_POST["pin"];

		$conn = connect();

		$result = mysql_fetch_array(mysql_query("SELECT pin, permissions FROM user_login WHERE pin = $pin"));
		 
		$permission = $result["permissions"];

		switch($permission){
			case "administrator":
				//Will be replaced with admin page redirect
				echo("admin");
				break;

			case "guest":
				//Will be replaced with guest page redirect
				echo("gooooost");
				break;

			case "accountant":
				//Will be replaced with accountant page redirect
				echo("Numbers baby");
				break;
			default:
				echo("invalid credentials");
				break;
		}
		/*
		if($private_key == $Password && $UserID == $username){
		//Redirects the user to the CSEE Advising page
		 
		$_SESSION["auth"] = true;
		$_SESSION["id"] = $user_data["id"];
		header("Location:../advisors/granted.php");
		}
		else{
			header("Location:../advisors/logout.php");
			echo("Entry Denied");
		} 
		*/
	disconnect($conn);
	session_destroy();
?>