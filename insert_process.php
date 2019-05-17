<?php

require_once("db_connect.php");

$first = $_REQUEST['first'];
$last = $_REQUEST['last'];
$department = $_REQUEST['department'];
$position = $_REQUEST['position'];
$salary = $_REQUEST['salary'];

//echo($last . $first.$department.$position.$salary);

//This needs to be in the same ORDER that your columns are in...
$sql = "INSERT INTO employee VALUES (''," .
                                     "'".$last."'," .
                                     "'".$first."'," . 
                                     "'".$department."'," . 
                                     "'".$position."'," . 
                                     "'".$salary."')";
echo($sql);
?>