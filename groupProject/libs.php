<?php
/*Written by Josh Standiford*/ 
session_start();

/* 
** Desc: Connects user to database, with static credentials
*/
function connect(){

	$db ="mysql";
	$conn = new mysqli("192.168.1.94", "root", "1Asxdcfv", "mysql");
	//$conn = mysqli_connect("71.244.148.17", "root", "1Asxdcfv", "mysql");
	if(mysqli_connect_errno()){
		echo("Could not connect to MySQL" . mysqli_connect_error());
	}
	/*finish phpmyadmin config below
	$er = mysql_select_db("mysql");
	if(!$er){
		echo("Could not find table name");
	}*/
	return $conn;
}
/* 
** Desc: Disconnects MYSQL object 
*/
function disconnect($conn){
	mysql_close($conn);
}

/*
** Desc:
**	Checks the users credentials, and if they're not valid. Redirect them to specified page.
**  Credentials are tracked through session variables and obtained via verifyUser.php
**
*/
function credCheck(){
	session_start();
	if(!$_SESSION["auth"]){
		header("Location:indexed.html");
	}
}

