<?php
	
	$file = fopen("data.txt", "r");

	$i = 0;
	$counter = 0;
	$main_array = array();

	while (!feof($file))
	{
	    $members[] = fgets($file);

		if (strpos($members[$i], '---------End of Report---------') !== false)
    	{
    		$counter++;
    		unset($members[$i]);
    	}

    	$i++;    
	}

	$sub_array_size = sizeof($members) / $counter;
	$data = array_chunk($members, $sub_array_size);

	foreach ($data as $key => $value) {
		foreach ($value as $k => $v) {

			$exploded_data = explode(":", $v);

			$data[$key][trim($exploded_data[0])] = $data[$key][$k];
			unset($data[$key][$k]);

			$data[$key][trim($exploded_data[0])] = $exploded_data[1];
		}		
	}

	if( isset($_GET['sort']) && $_GET['sort'] != "" ) {
		// setting sorting argument as key so that we can sort it.
		foreach ($data as $key => $value) {
			foreach ($value as $k => $v) {
				
				$k = trim($k);
				$v = trim($v);
				
				if (strpos($k, $_GET['sort']) !== false) {
					if ($_GET['sort'] == "dob")
						$v = strtotime($v);

					$data[$v] = $data[$key];
					unset($data[$key]);
				}
			}
		}
		
		if ($_GET['sort'] == "dob")
			krsort($data);	// kr sorting based on dob key
		else
			ksort($data);	// k sorting based on name/age key

		echo "<pre>";
		print_r($data);
	}

	if( isset($_GET['search']) && $_GET['search'] != "" ) {
		$flag = -1;
		foreach ($data as $key => $value) {

			$str = implode(",", array_values($value));

			if (strpos($str, $_GET['search']) !== false) {
				echo "Yes, match found.";

				echo "<pre>";
				print_r($value);

				$flag = $key;
			}
		}

		if ($flag == -1) {
			echo "Cound not find any match.";
		}	
	}

	fclose($file);
?>