<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Inserting data into db</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>
		<!--post passes info as an array instead of a querry string in teh URL-->
	<form action="insert_process.php" method="post" class="uk-form-stacked js-login">
		<h2>Add employee</h2>
		<label class="uk-form-label" for="first">first</label>
			<input class="uk-input" id="first" type="text" name="first" required='required' placeholder="first">
		<label class="uk-form-label" for="last">last</label>
			<input class="uk-input" id="last" type="text" name="last" required='required' placeholder="last">
		<label class="uk-form-label" for="department">department</label>
			<select class="uk-input" id="department" type="text" name="department" required='required' placeholder="department">
				<!--The value is what gets passed to the server, so we want to use the ID-->
				<option value="1">Accounting</option>
				<option value="2">Sales</option>
				<option value="3">Information Technology</option>
				<option value="4">Management</option>
			</select>
		<label class="uk-form-label" for="position">position</label>
			<input class="uk-input" id="position" type="text" name="position" required='required' placeholder="position">
		<label class="uk-form-label" for="salary">salary</label>
			<input class="uk-input" id="salary" type="text" name="salary" required='required' placeholder="salary">
		<button class="uk-button uk-button-default" type="submit" value="Save Info">Submit</button>
	</form>
  </body>
</html>


