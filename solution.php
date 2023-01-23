<!DOCTYPE html>
<html>
        <head>
        <title>
        Diagnose faults with Jacob              
        </title>
        </head>
		
		<link rel = "stylesheet" href = "style.css">
		
        <body>
		<div class="top">
        <h1>DIAGNOSIS</h1>
		<h2>STEP 4</h2>
		<h2>SOLUTION (& REASONING)</h2>
		</div>

		<div class = "bottom">
		<br>This is the solution to the problem:<br/>
        
		<?php
		include ('funkcje.php');
		$cause = writeCSVtoArray("3causes.csv");
		$trouble = writeCSVtoArray("2troubles.csv");
		$location = writeCSVtoArray("1locations.csv");
		$IDs = explode('&', $_POST['cause']);
		
			foreach ($cause as $data) {
				if ($IDs[2] == $data['causeID'] && $IDs[0] == $data['locationID'] && $IDs[1] == $data['troubleID']){
				echo "<b>".$data['solutionName']."</b>";
				}
			}
			echo "<br><br>This is the path you took to come to this solution:<br>";
			foreach ($location as $data) {
				if ($IDs[0] == $data['locationID']){
				echo $data['name']." => ";
				}
			}
			foreach ($trouble as $data) {
				if ($IDs[1] == $data['troubleID'] && $IDs[0] == $data['locationID']){
				echo $data['name']." => ";
				}
			}
			foreach ($cause as $data) {
				if ($IDs[2] == $data['causeID'] && $IDs[0] == $data['locationID'] && $IDs[1] == $data['troubleID']){
				echo $data['causeName']." => ".$data['solutionName'];
				}
			}
			
        ?>
		
		</div>
        </body>
</html>

