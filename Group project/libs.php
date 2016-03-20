<?php 
session_start();
function connect(){

	$db ="jstand1";
	$conn = @mysql_connect("studentdb-maria.gl.umbc.edu", "jstand1", "jstand1");
	if(!$conn){
		echo("Could not connect to MySQL");
	}

	$er = mysql_select_db("jstand1");
	if(!$er){
		echo("Could not find table name");
	}
	return $conn;
}


function disconnect($conn){
	mysql_close($conn);
}


