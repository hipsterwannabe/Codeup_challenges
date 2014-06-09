<?php
// Write a function that can do this:

// What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

for ($i = 21; $i < 1000000000; $i++) {
	for ($j = 2; $j <= 20; $j++){
		if (($i % $j) !== 0){
			break;
		} 
	} 
}

echo $i.' is divisible by 1-20!'.PHP_EOL;

?>