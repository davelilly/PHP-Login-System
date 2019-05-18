<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>
		<!--post passes info as an array instead of a querry string in teh URL-->
		<form action="insert_process.php" method="post" class="uk-form-stacked js-login">
			<input class="uk-input" id="first" type="text" name="search" required='required' placeholder="Your search term">
			<button class="uk-button uk-button-default" type="submit" value="Search">Submit</button>
	</form>
  </body>
</html>
<?php

print('
<button> <a href="Employee-List.php">View list</a></button></br>
<button> <a href="Add-Employee-Form.php">Add Employee</a></button></br>
');

?>

