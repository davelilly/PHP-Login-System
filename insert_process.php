<?php

require_once("db_connect.php");
                //   \/-- the name="" of the field from the form
$first = $_REQUEST['first'];
$last = $_REQUEST['last'];
$department = $_REQUEST['department'];
$position = $_REQUEST['position'];
$salary = $_REQUEST['salary'];

//test it:
//echo($last . $first.$department.$position.$salary);

//This will spit out a query of INSERT INTO employee VALUES ('','$last','$first','$department','$position','$salary');
//This MUST be in the same ORDER that your table columns are in!!!
$sql = "INSERT INTO employee VALUES (''," .
                                     "'".$last."'," .
                                     "'".$first."'," . 
                                     "'".$department."'," . 
                                     "'".$position."'," . 
                                     "'".$salary."');";


//This will RUN the QUERRY that we just tested inside of mySQL in phpMyAdmin                                   
mysql_query($sql);                                   
mysql_close($connection);

echo($first . " " . $last . " was added to the db!!");
echo("View list <a href='Employee-List.php'>here</a>");
//echo($sql);
?>