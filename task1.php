<?php

/**
 * Returns the data multipule times
 * 
 * @param array $data
 * @param int $multiply
 * @return array rerturnArray
 */
function repeat(array $data, $multiply = 3)
{
	$rerturnArray = array();
	//Lets check if input is correct
	if(is_numeric($multiply) && $multiply > 0)
	{
		//Loop and copy trough the data
		for($i = 0; $i < $multiply; $i++) 
		{
			//Merge data with excisting return data
			$rerturnArray = array_merge($rerturnArray, $data);
		}
	}
	return $rerturnArray;
}

/*
$return = repeat([1,2,3]); //[1,2,3,1,2,3,1,2,3]
print_r($return);
*/
