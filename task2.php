<?php

/**
 * Return the string without vowels in lowercase except the first letter
 * 
 * @param str $data
 * @return str data
 */
function reformat($data)
{
	//First set all to lower
	$data = strtolower($data);
	
	//lets remove the vowels now that they are all lower
	$vowels = array('a', 'e', 'i', 'u', 'o');
	$data = str_replace($vowels, '', $data);
	
	//last we add Capital to first letter
	return ucfirst($data);
	
}

/*
echo reformat("liMeSHArp DeveLoper TEST"); //Lmshrp dvlpr tst
*/
