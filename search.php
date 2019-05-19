<?php
// require_once('db_connect.php');

// $output='';
// if(isset($_POST['search'])){
//     $searchkey= $_POST['search'];
//     $searchkey=preg_replace("#[^0-9a-z]#i", "", $searchkey);
// 		$sql = "SELECT * FROM employee WHERE firstName LIKE '%$searchkey%' OR lastName LIKE '%$searchkey%'";
//     $query = mysqli_query($connection,$sql) or die(mysql_error());
//     $count = mysqli_num_rows($query);

//     if($count == 0){
//         $output="There was no search result!";
//     }
//     else{
//         while($row=mysqli_fetch_array($query)){
//             $fname=$row['firstName'];
//             $lname=$row['lastName'];
//             $output .='<div>'.$fname.''.$lname.'</div>';
//             echo "$output";
//         }
//     }
// }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>
		<!--post passes info as an array instead of a querry string in teh URL-->
		<form action="search_process.php" method="post" class="uk-form-stacked js-login">
			<input class="uk-input" id="first" type="text" name="search" required='required' placeholder="Your search term">
			<button class="uk-button uk-button-default" type="submit" value="Search">Submit</button>
	</form>
  </body>
</html>

<?php

print("$output");



?>

