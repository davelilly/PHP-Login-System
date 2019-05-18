<?php

require_once("db_connect.php");

$id = $_REQUEST['id'];

$sql = "DELETE FROM employee WHERE empId='" . $id . "'";
//echo($sql);
mysql_query($sql) or die(mysql_error());
print("User" . $id . "was deleted");
print('<button> <a href="Employee-List.php">View list</a></button>');

?>