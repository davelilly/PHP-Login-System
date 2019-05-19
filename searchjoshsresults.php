<?php
// require_once('db_connect.php');

// $output='';
// if(isset($_POST['SearchBtnVal'])){//if search is clicked(or "posted")
//     $searchkey= $_POST['searchval'];
//     $searchkey=preg_replace_callback("#[^0-9a-z]#i", "", $searchkey);
// 		$sql = "SELECT * FROM employee WHERE firstName LIKE '%$searchkey%' OR lastName LIKE '%$searchkey%'";
//     $query = mysqli_query($connection,$sql) or die(mysql_error());
//     $count = mysqli_num_rows($query);

//     if($count == 0){
//         $output="There was no search result!";
//     }
//     else{
//         while($row=mysqli_fetch_array($query)){ //OR mysqli_fetch_assoc or _array
//             $fname=$row['firstName'];
//             $lname=$row['lastName'];
//             $output .='<div>'.$fname.''.$lname.'</div>';
//             echo "$output";
//         }
//     }
// }

?>