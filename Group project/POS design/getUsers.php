<?php
/**
 * Created by IntelliJ IDEA.
 * User: Josh
 * Date: 4/30/2016
 * Time: 11:54 PM
 */
require_once ("libs.php");
$conn = connect();
$query = "SELECT pin FROM user_login WHERE 1";
$result = mysql_fetch_array(mysql_query($query));

for($result as $val){
    echo($val . "<br>");
}