<?php
// Create a function alphabet_soup($str) that accepts a string 
// and will return the string in alphabetical order. 
// E.g. "hello world" becomes "ehllo dlorw". 
// So make sure your function separates and alphabetizes each word separately.

function alphabet_soup($str){

	//explode passed string
	$sortedString = " ";
	$unsortedArray = explode(" ", $str);
	var_dump($unsortedArray);
	//loop through array values
	foreach ($unsortedArray as $key => $value) {
		//explode word strings
		$unsortedWord = str_split($value);
		asort($unsortedWord, SORT_NATURAL);
		var_dump($unsortedWord);
		foreach ($unsortedWord as $key => $value) {
			$sortedString = $sortedString.$unsortedWord[$key];
		}
		
	
	}
	var_dump($sortedString);
}

$str = 'hello world';
alphabet_soup($str);
?>