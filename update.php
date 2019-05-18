<?php
require_once("db_connect.php");
$id = $_REQUEST['id'];
//You are fetching an array of your query! that's pretty simple
//Or written another way--> mysql_fetch_array(mysql_query("SELECT * FROM employee WHERE empId='" . $id . "'") or die(mysql_error()));
$sql = "SELECT * FROM employee WHERE empId='" . $id . "'";
//echo $sql;
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result) or die(mysql_error());
//Then you are picking which column you want to get data from
echo '<div style="color:red">' . $row["salary"].'<div>';
?>

<html lang="en">
  <head>

    <title>Inserting data into db</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>
		<!--post passes info as an array instead of a querry string in teh URL-->
	<form action="update_process.php" method="post" class="uk-form-stacked js-login">
		<h2>Add employee</h2>
		<label class="uk-form-label" for="first">first</label>
			<input class="uk-input" id="first" type="text" name="first" required='required' placeholder="first" value="<?php print($row["firstName"]); ?>">
		<label class="uk-form-label" for="last">last</label>
			<input class="uk-input" id="last" type="text" name="last" required='required' placeholder="last" value="<?php print($row["lastName"]); ?>">
		<label class="uk-form-label" for="department">department</label>
			<select class="uk-input" id="department" type="text" name="department" required='required'>
				<!--The value is what gets passed to the server, so we want to use the ID-->
				<option value="1" <?php if($row["department"]==1){print("selected");} ?> >Accounting</option>
				<option value="2" <?php if($row["department"]==2){print("selected");} ?> >Sales</option>
				<option value="3" <?php if($row["department"]==3){print("selected");} ?> >Information Technology</option>
				<option value="4" <?php if($row["department"]==4){print("selected");} ?> >Management</option>
			</select>
		<label class="uk-form-label" for="position">position</label>
			<input class="uk-input" id="position" type="text" name="position" required='required' placeholder="position" value="<?php print($row["position"]); ?>">
		<label class="uk-form-label" for="salary">salary</label>
			<input class="uk-input" id="salary" type="text" name="salary" required='required' placeholder="salary" value="<?php print($row["salary"]); ?>">
		<button class="uk-button uk-button-default" type="submit" value="Save Info">Save</button>
	</form>
  </body>
</html>