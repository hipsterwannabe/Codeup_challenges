<?php
function is_palindrome($string){
//UNSET BLANK SPACES IN ARRAYS TO CHECK!!!!
	//2.0
	//make string lower case, to ignore case sensitivity
	$string = strtolower($string);
	//take sentence, strip non-letter characters
	$string = str_replace(".,;?!\":-,", '', $string);
	//turn string into array
	$backwards = str_split($string);
	$sdrawkcab = str_split($string);
	//unset empty spaces
	
	//reverse array
	krsort($sdrawkcab);
	var_dump($sdrawkcab);
	//check if arrays are the same
	return ($backwards == $sdrawkcab);
}

echo "Enter a sentence, I'll check if it's a palindrome:".PHP_EOL;
$string = trim(fgets(STDIN));
if (is_palindrome($string)) {
	echo 'This is a palindrome'.PHP_EOL;
} else {
	echo 'This is not a palindrome'.PHP_EOL;
}

?>