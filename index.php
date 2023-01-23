<!DOCTYPE html>
<html>
        <head>
        <title>
        Diagnose faults with Jacob              
        </title>
		<link rel = "stylesheet" href = "style.css">
        </head>
        <body>

		<div class="top">
        <h1>DIAGNOSIS</h1>
		<h2>STEP 1</h2>
		<h2>LOCATION</h2>
		</div>
		<div class = "bottom">
        <form id="choice_location" action="trouble.php" method="POST">
        Choose location of the problem:<br/>
        <select name="location" id="loc">
        <option value="select">Select one of...</option> 
        <?php
		include ('funkcje.php');
		$location = writeCSVtoArray("1locations.csv");
		
			foreach ($location as $data) {
				echo "<option value=".$data['locationID'].">".$data['name']."</option>";
			}
		
        ?>
        </select><br/>
        <input type="submit" value="Submit"/>
        </form>
		
		</div>
        </body>
</html>

