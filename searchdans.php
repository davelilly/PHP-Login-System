
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>
		<!--post passes info as an array instead of a querry string in teh URL-->
    <h1>Front Page12</h1>
    <h2>All Articles</h2>
    
    <form action="searchdansresults.php" method="post" class="uk-form-stacked js-login">
        <input class="uk-input" id="first" type="text" name="searchval" required='required' placeholder="Your search term">
        <button class="uk-button uk-button-default" type="submit" value="Search">Search</button>
	</form>

    <div>
        <?php
        require_once("db_connect.php");

            $sql = "SELECT * FROM employee";
            $result = mysqli_query($sql) or die(mysqli_error());
            $count = mysqli_num_rows($result);
            //$row = mysql_fetch_assoc($result); //OR mysql_fetch_array
            //echo $row['firstName'] . " " . $row['lastName'];
                while($row = mysqli_fetch_assoc($result)){ //OR mysqli_fetch_assoc or _array
                    echo $row['firstName'] . $row['lastName'];
                
            }
        ?>
    </div>
  </body>
</html>

