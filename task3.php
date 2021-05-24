<?php

/**
 * Return the next binary number
 * 
 * @param array $data
 * @return array data
 */
function next_binary_number(array $data)
{
	$reversedData = array_reverse($data, true);
	$finnished = false;
	for($i = 0; $i < count($data); $i++)
	{
		//number to check for 0
		$toCheck = count($data) - $i -1;
		if($data[$toCheck] != 1)
		{
			// we found the last 0 in the binary number, so lets set that to 1
			$data[$toCheck] = 1;
			//we can stop checking now so lets make $i equil to count
			$i = count($data);
			//lets also set a value so we know we are finnished
			$finnished = true;
		} else {
			$data[$toCheck] = 0;
		}		
	}
	//lets check if we are finnished, or if we need to at a 1 at the front still
	if(!$finnished)
	{
		$data = array_merge(array(1), $data);

	}
	
	return $data;
}

/*
$data = next_binary_number([1,1,0,1,1,1]); // [1,1]
print_r($data);
*/
// possible test cases:
// [1,0] => [1,1]
// [1,1] => [1,0,0]
// [1,1,0] => [1,1,1]
// .......
// [1,0,0,0,0,0,0,0,0,1] => [1,0,0,0,0,0,0,0,1,0]
