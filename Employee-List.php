<?php

require_once("db_connect.php");

$sql = "SELECT * FROM employee";
$result = mysql_query($sql) or die(mysql_error());


echo("<table>");
//You can get the first item
//$row = mysql_fetch_array($result);
//echo $row["empId"] . $row["firstName"];
//OR
//get all the items
//while($row = mysql_fetch_array($result)){
//    echo $row["empId"] . $row["firstName"];
//};
//OR
//fetch_array takes a row and parses it as an array
while($row = mysql_fetch_array($result)){
    echo("<tr>");
    echo "<td>" . $row["empId"] . "</td>" . 
        "<td>" . $row["firstName"] . "</td>" . 
        "<td>" . $row["lastName"] . "</td>";
    echo"</tr>";
}

echo "</table>";
?>



