


<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>
  <h1>Searchx</h1>
		<!--post passes info as an array instead of a querry string in teh URL-->
		<form action="searchjosh.php" method="post" class="uk-form-stacked js-login">
			<input class="uk-input" id="first" type="text" name="searchval" required='required' placeholder="Your search term">
			<button class="uk-button uk-button-default" type="submit" value="SearchBtnVal">Submit</button>
	  </form>
  </body>
</html>

<?php
require_once('db_connect.php');
$output = ''; 
//collect the post of hte script
 if(isset($_POST['SearchBtnVal'])){ //if search btn value is clicked(or "posted")
    $searchq = $_POST['searchval']; //this is what user entered in field named searchval
    //$searchq = preg_replace_callback("#[^0-9a-z]#i","letters and numbers only",$searchq); //this allows only letters and numbers   
    $sql = "SELECT * FROM employee WHERE firstName LIKE '%$searchq%' OR lastName LIKE '%$searchq%' ";
    $result = mysqli_query($connection,$sql) or die("dead");
    $count = mysqli_num_rows($result);

    if($count == 0){
        $output="There was no search result!";
    }else{
        while($row=mysqli_fetch_assoc($result)){ //OR mysqli_fetch_assoc or _array
            $fname=$row['firstName'];
            $lname=$row['lastName'];
            $id = $row['id'];
            $output .='<div>'.$fname.' '.$lname.'</div>';


        }
    }
}
?> 


<?php

print("$output");

?>

