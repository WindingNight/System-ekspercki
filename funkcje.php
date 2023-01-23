        <?php
		
		
		function writeCSVtoArray($filepath) {
			$filename = $filepath;
			$rows = [];
			$handle = fopen($filename, "r");
			
			while (($row = fgetcsv($handle, NULL, ";")) !== false) {
				$rows[] = $row;
			}
			fclose($handle);
			
			$headers = array_shift($rows);
			$array = [];
			foreach ($rows as $row) {
				$array[] = array_combine($headers, $row);
			}
			#echo $array[2]['locationID']."<p></p>";
			
			return $array;
		}
		

		
		
        ?>