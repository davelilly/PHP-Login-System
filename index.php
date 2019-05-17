<?php

require_once("db_connect.php");

$sql = "SELECT * FROM employee";
$result = mysql_query($sql) or die(mysql_error());


echo("<table>");
//takes a row and parses it as an array

while($row = mysql_fetch_array($result)){
    echo("<tr>");
    echo "<td>" . $row["empId"] . "</td>" . 
        "<td>" . $row["firstName"] . "</td>" . 
        "<td>" . $row["lastName"] . "</td>";
    echo"</tr>";
}

echo "</table>";
?>



