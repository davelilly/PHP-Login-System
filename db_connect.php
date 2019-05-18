
<div style="font-size: 6px;">
<?php
    //database connect script
    $db_name = "employees";
    $un = "root";
    $pw = "root";
    $host = "localhost";
    
    //if you wanted to come could simply use the actual values(sans "") in here instead of variables
    $connection = mysql_connect($host, $un, $pw) or die (mysql_error());
    echo("connected to database in mySQL!");
    echo(" and ");
    mysql_select_db("employees") or die (mysql_error());
    echo("connected to specific table in database");
?>
</div>