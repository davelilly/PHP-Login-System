<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Inserting data into db</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>

  	<div class="uk-section uk-container">
  		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
              <!--post passes info as an array instead of a querry string in teh URL-->
			<form action="insert_process.php" method="post" class="uk-form-stacked js-login">
				
				<h2>Add employee</h2>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="first">first</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="first" type="text" name="first" required='required' placeholder="first">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="last">last</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="last" type="text" name="last" required='required' placeholder="last">
			        </div>
                </div>
                
                <div class="uk-margin">
			        <label class="uk-form-label" for="department">department</label>
			        <div class="uk-form-controls">
			            <select class="uk-input" id="department" type="text" name="department" required='required' placeholder="department">
                            <!--Theh value is what gets passed to the server, so we want to use the ID-->
                            <option value="1">Accounting</option>
                            <option value="2">Sales</option>
                            <option value="">Information Technology</option>
                            <option value="">Management</option>
                        </select>
			        </div>
                </div>
                
                <div class="uk-margin">
			        <label class="uk-form-label" for="position">position</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="position" type="text" name="position" required='required' placeholder="position">
			        </div>
                </div>
                
                <div class="uk-margin">
			        <label class="uk-form-label" for="salary">salary</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="salary" type="text" name="salary" required='required' placeholder="salary">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <button class="uk-button uk-button-default" type="submit" value="Save Info">Login</button>
			    </div>

			</form>
  		</div>
  	</div>

  	<?php require_once "inc/footer.php"; ?> 
  </body>
</html>


