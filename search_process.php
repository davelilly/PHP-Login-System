<?php
require_once('db_connect.php');
$output = ''; 
//collect the post of hte script
 if(isset($_POST['search'])){ //if saerch is clicked(or "posted")
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","letters and numbers only",$searchq); //this allows only letters and numbers   
    $sql = "SELECT * employee WHERE firstName LIKE '%$searchq%' OR lastName LIKE '%$searchq%' ";
    $query = mysql_query($connection,$sql) or die('mysql_error()');

    if($count == 0){
        $output="There was no search result!";
    }else{
        while($row=mysqli_fetch_array($query)){
            $fname=$row['firstName'];
            $lname=$row['lastName'];
            $id = $row['id'];
            $output .='<div>'.$fname.' '.$lname.'</div>';

            echo "$output";

        }
    }
}
?> 
 
