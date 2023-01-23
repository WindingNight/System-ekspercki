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
		<h2>STEP 2</h2>
		<h2>EXACT TROUBLE</h2>
		</div>
		<div class = "bottom">
        <form id="choice_location" action="cause.php" method="POST">
        Choose nature of the problem:<br/>
        <select name="trouble" id="tro">
        <option value="select">Select one of...</option> 
		
        <?php
		
		include ('funkcje.php');
		$trouble = writeCSVtoArray("2troubles.csv");
		
			foreach ($trouble as $data) {
				if ($_POST['location'] == $data['locationID']){
				echo "<option value=".$data['locationID'].'&'.$data['troubleID'].">".$data['name']."</option>";
				}
			}
        ?>
        </select><br/>
        <input type="submit" value="Submit"/>
        </form>
		</div>
        </body>
</html>

