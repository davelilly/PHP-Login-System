<?php
//connect to db
require_once('db_connect.php');
//querry the db w a mysql_query
//look into db design like a book "database design for mere mortals"
$id = $_REQUEST['id'];
$last = $_REQUEST['last'];
$first = $_REQUEST['first'];
$department = $_REQUEST['department'];
$position = $_REQUEST['position'];
$salary = $_REQUEST['salary'];
//querry the db w a mysql_query
//These do NOT have to be in order
//This query will be UPDATE employee SET lastName = '$last',firstName = '$first',department = '$department',position = '$position',salary = '175000' WHERE empId = $id;
$sql = "UPDATE employee SET " . 
        "lastName = '" . $last . "'," . 
        "firstName = '" . $first . "'," . 
        "department = '" . $department . "',"  . 
        "position = '" . $position . "'," . 
        "salary = '" . $salary . "' WHERE empId = ' " . $id . "';";

//echo($sql);

mysql_query($sql) or die(mysql_error());

print("Success! User " . $id . " is updated.");

print('
<button> <a href="Employee-List.php">View list</a></button></br>
<button> <a href="Add-Employee-Form.php">Add Employee</a></button></br>
');



?>