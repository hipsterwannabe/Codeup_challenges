<?php
function is_palindrome($string){

	//2.0
	//make string lower case, to ignore case sensitivity
	$string = strtolower($string);
	//take sentence, strip non-letter characters
	$string = str_replace($string, ' ', '.,;:"\'-');
	//turn string into array
	$backwards = explode(' ', $string);
	//reverse array
	$sdrawkcab = rsort($backwards);
	//check if arrays are the same
	return ($backwards == $sdrawkcab);
}

echo "Enter a sentnce, I'll check if it's a palindrome:".PHP_EOL;
$string = trim(fgets(STDIN));
if (is_palindrome($string)) {
	echo 'This is a palindrome'.PHP_EOL;
} else {
	echo 'This is not a palindrome'.PHP_EOL;
}

?>