<?php

require_once("db_connect.php");

$id = $_REQUEST['id'];

$sql = "DELETE FROM employee WHERE empId='" . $id . "'";
//echo($sql);
mysqli_query($connection,$sql) or die(mysqli_connect_error());
print("User" . $id . "was deleted");
print('<button> <a href="Employee-List.php">View list</a></button>');

?>