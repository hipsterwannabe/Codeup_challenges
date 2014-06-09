<?php
// Create a function alphabet_soup($str) that accepts a string 
// and will return the string in alphabetical order. 
// E.g. "hello world" becomes "ehllo dlorw". 
// So make sure your function separates and alphabetizes each word separately.

function alphabet_soup($str){

	//take string and separate words
	$word_array = explode(' ', $str);
	
	//alphabetize letters in individual words
	//at this state, we have array of words, string in each index
	foreach ($i as $word_array[$i]) {
		//go through array to get each word
		$sorted_word = [];
		$unsorted_word = explode('', $word);
		$sorted_word[$i] = implode(asort($unsorted_word)) ;
	}

	//return string of alphabetized words
	return $reverse;
}

?>