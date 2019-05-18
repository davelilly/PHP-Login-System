
<div style="font-size: 6px;">
<?php
    //database connect script
    $db_name = "employees";
    $un = "root";
    $pw = "root";
    $host = "localhost";

    $connection = mysql_connect($host, $un, $pw) or die (mysql_error());
    echo("connected to database in mySQL!");
    echo(" and ");
    mysql_select_db($db_name) or die (mysql_error());
    echo("connected to specific table in database");
?>
</div>