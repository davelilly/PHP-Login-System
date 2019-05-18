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
        "<td>" . $row["department"] . "</td>" . 
        "<td>" . $row["lastName"] . "</td>" . 
        "<td>" . $row["firstName"] . "</td>" . 
        "<td>" . $row["salary"] . "</td>" . 
        "<td>" . $row["position"] . "</td>" .
        "<td> <a href='delete.php?id=" . $row['empId'] . "'>delete</a> </td>" .
        "<td> <a href='update.php?id=" . $row['empId'] . "'>update</a> </td>";

    echo"</tr>";
}

echo "</table>";
?>



