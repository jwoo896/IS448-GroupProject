<?php
	/*
	**Authored:  Joshua Standiford
	**Date Modified: 3/20/2016
	**Description: This file is used to validate user credentials via PIN system.  The user's pin holds the weight for users access permissions
	**
	*/
	session_start();
	$_SESSION["auth"] = false;
	require_once("libs.php");

		$pin = $_POST["pin"];
	
		$conn = connect();
	
		$result = mysql_fetch_array(mysql_query("SELECT pin, permissions, first_name, last_name FROM user_login WHERE pin = $pin"));
		$_SESSION['pin'] = $pin;
		$fname = $result['first_name'];
		$lname = $result['last_name'];
		$userName = $fname . " " . $lname;
	
		$permission = $result["permissions"];
		$_SESSION["permission"] = $permission;
		switch($permission){
			case "administrator":
				//Will be replaced with admin page redirect
				$_SESSION["auth"] = true;
				header("Location:categoriesPage.php");
				break;

			case "guest":
				//Will be replaced with guest page redirect
				$_SESSION["auth"] = true;
				$_SESSION['User'] = $userName;	
				header("Location:categoriesPage.php");

				break;

			case "accountant":
				//Will be replaced with accountant page redirect
				$_SESSION["auth"] = true;
				header("Location:categoriesPage.php");
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
	
?>