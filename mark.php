<?php

print("hi");

require_once("db_connect.php");

//this is an "informal join"
//the list of columns do not need to be in any particular order
$sql = "SELECT * FROM employee";
$result = mysql_query($sql) or die(mysql_error());

$row = mysql_fetch_array($result);
echo $row["empId"] . $row["firstName"];

?>