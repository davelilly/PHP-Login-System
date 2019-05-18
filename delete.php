<?php

require_once("db_connect.php");

$id = $_REQUEST['id'];

$sql = "DELETE FROM employee WHERE empId='" . $id . "'";
//echo($sql);
mysql_query($sql) or die(mysql_error());
print("Deleted" . $id . "was deleted");
print('Return to list <a href="Employee-List.php">here</a>');

?>