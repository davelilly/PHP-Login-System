<h1>List</h1>
<?php

require_once("db_connect.php");

//this is an "informal join"
//the list of columns do not need to be in any particular order
$sql = "SELECT empId,firstName,departmentName,position,lastName,salary FROM employee,departments WHERE department = deptId";
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
//Put the columns in the order you want them displayed
echo"<tr>
<th></th>
<th>last</th>
<th>first</th>
<th>dept</th>
<th>position</th>
<th>sal</th>
</tr>";
while($row = mysql_fetch_array($result)){
    echo("<tr>");
    echo "<td>" . $row["empId"] . "</td>" . 
        "<td>" . $row["lastName"] . "</td>" . 
        "<td>" . $row["firstName"] . "</td>" . 
        "<td>" . $row["departmentName"] . "</td>" . 
        "<td>" . $row["position"] . "</td>" .
        "<td>" . $row["salary"] . "</td>" . 
        "<td> <a href='delete.php?id=" . $row['empId'] . "'>delete</a> </td>" .
        "<td> <a href='update.php?id=" . $row['empId'] . "'>update</a> </td>";

    echo"</tr>";
}

echo "</table>";


print('
<button> <a href="Add-Employee-Form.php">Add Employee</a></button></br>
');


?>



