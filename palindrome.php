<?php
// Create a function that can detect whether a word is a palindrome or not. 
// A palindrome is a word that can be interpreted the same way in reverse order.

// Create the function so it will return a bool value true if the entered word 
// is a palindrome. Function name example could be is_palindrome(). 
// After you are complete test several known palindromes, then test regular 
// words in your function.

function is_palindrome($word){

// retrieve the word as a string
// turn string into array
// check to see if beginning and ending letters are same
	$word_length = strlen($word);
	$word_array = str_split($word);
	$word_length_odd = ($word_length % 2); 
// remember, arrays are zero based
// array keys from 0 to ($word_length)-1
	if ($word_length_odd) {
		for (($i = 0); $i < (($word_length - 1)/2); $i++) {
		 	if ($word_array[$i] != $word_array[$word_length - ($i+1)]){
				return false;
				break;
			} else {
				return true;
		}
	}
	} else {
		for ($i = 0; $i < ($word_length/2); $i++) {
			if ($word_array[$i] != $word_array[$word_length - ($i+1)]){
				return false;
				break;
			} else {
				return true;
			}
		}
	}
}

$word = 'tattarrattat';
if (is_palindrome($word)) {
	echo 'This is a palindrome'.PHP_EOL;
} else {
	echo 'This is not a palindrome'.PHP_EOL;
}

?>