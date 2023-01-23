<!DOCTYPE html>
<html>
        <head>
        <title>
        Diagnose faults with Jacob              
        </title>
        </head>
		<link rel = "stylesheet" href = "style.css">
        <body>
		<div class = "top">
        <h1>DIAGNOSIS</h1>
		<h2>STEP 3</h2>
		<h2>CAUSE</h2>
		</div>
		<div class = "bottom">


        <form id="choice_location" action="solution.php" method="POST">
        Choose cause of the problem:<br/>
        <select name="cause" id="tro">
        <option value="select">Select one of...</option> 
        
		<?php
		include ('funkcje.php');
		$cause = writeCSVtoArray("3causes.csv");
		$IDs = explode('&', $_POST['trouble']);
		
			foreach ($cause as $data) {
				if ($IDs[0] == $data['locationID'] && $IDs[1] == $data['troubleID']){
				echo "<option value=".$data['locationID'].'&'.$data['troubleID'].'&'.$data['causeID'].">".$data['causeName']."</option>";
				}
			}
		
        ?>
        </select><br/>
        <input type="submit" value="Submit"/>
        </form>
		
		
		</div>
        </body>
</html>

