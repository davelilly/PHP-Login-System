<?php
require_once("db_connect.php");

    if(isset($_POST['SearchBtnVal'])){ //if search btn value is clicked(or "posted")
        $searchq = mysqli_real_escape_string($connection,$_POST['searchval']); //this is what user entered in field named searchval
        $sql = "SELECT * FROM employee WHERE firstName LIKE '%$searchq%' OR lastName LIKE '%$searchq%' ";
        $result = mysqli_query($connection,$sql) or die(mysqli_connect_error());
        $count = mysqli_num_rows($result);
        //$row = mysql_fetch_assoc($result); //OR mysql_fetch_array
        //echo $row['firstName'] . " " . $row['lastName'];
        if($count > 0){
            while($row = mysqli_fetch_assoc($result)){ //OR mysqli_fetch_assoc or _array
                echo($row['firstName'] . $row['lastName']);
            }
        }else{
            echo("Nope");
        }
    }

?>
    