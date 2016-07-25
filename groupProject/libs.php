<?php
/*Written by Josh Standiford*/ 
session_start();

/* 
** Desc: Connects user to database, with static credentials
*/
function connect(){

	$db ="mysql";
	//VERY IMPORTANT: USE DOCUMENTATION FOR PHP 5.5 AND UP...
	$conn = new mysqli("71.244.148.17/phpmyadmin/", "root", "1Asxdcfv", "mysql");
	if(!$conn){
		echo("Could not connect to MySQL");
	}
	//finish phpmyadmin config below
	$er = mysql_select_db("mysql");
	if(!$er){
		echo("Could not find table name");
	}
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
