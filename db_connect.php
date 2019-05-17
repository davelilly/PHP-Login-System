

<?php
    //database connect script
    $db_name = "employees";
    $un = "root";
    $pw = "root";
    $host = "localhost";

    mysql_connect($host, $un, $pw) or die (mysql_error());
    //echo("connected to db, Bitch!");

    mysql_select_db($db_name) or die (mysql_error());
    //echo("connected to table, Homie!");

?>