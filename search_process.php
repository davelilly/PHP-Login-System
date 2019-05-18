<?php
require_once('db_connect.php');

//collect the post of hte script

if(isset($_POST['search'])){ //if saerch is clicked(or "posted")
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","letters and numbers only") //this allows only letters and numbers
    
    $sql = "SELECT * employee WHERE firstName LIKE '%$searchq%' OR lastName LIKE '%s$earchq%' ";
    $query = mysql_query($sql) or die(mysql_error());
    
}

?>