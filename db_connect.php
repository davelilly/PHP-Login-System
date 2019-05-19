
<div style="font-size: 6px;">
<?php
    //database connect script
    $db_name = "employees";
    $un = "root";
    $pw = "root";
    $host = "localhost";
    
    //if you wanted to come could simply use the actual values(sans "") in here instead of variables
    $connection = mysqli_connect($host, $un, $pw, $db_name) OR die("Could not connect to MySQL: " . mysqli_connect_error());

    echo "connected to database in mySQL!"; //()Parenthesis are OPTIONAL!
    //echo(" and ");
    //mysqli_select_db($db_name) or die (mysqli_error());
    //echo "connected to specific table in database";
?>
</div>