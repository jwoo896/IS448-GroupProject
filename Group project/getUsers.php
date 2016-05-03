<?php
/**
 * Created by IntelliJ IDEA.
 * User: Josh
 * Date: 4/30/2016
 * Time: 11:54 PM
 */
require_once ("libs.php");
$dataentered = $_POST["sq"];
$conn = connect();
$result = mysql_query("SELECT pin FROM user_login");

while($row = mysql_fetch_array($result)){
    $a[] = "$row[0]";
}

//lookup all hints from array if length of q>0
if (strlen($dataentered) > 0)
{
  $hint="";
  
  for($i=0; $i<count($a); $i++)
  {
  if (strtolower($dataentered)==strtolower(substr($a[$i],0,strlen($dataentered))))
    {
    if ($hint=="")
      {
         $hint=$a[$i];
		 
      }
	  else
      {
		$hint=$hint." , ".$a[$i];
      }
    }
  }
  
  $choices = explode(",", $hint);
  echo "<ul>";
  $i = 0;
  foreach ($choices as $option){
	if($i < 3){
		echo "<li>$option</li><br/>";
  		$i++;
  	}
  }
  echo "</ul>";
}	
	
	

disconnect($conn);