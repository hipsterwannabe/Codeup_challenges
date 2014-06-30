<?php
// Write a function that can do this:

// What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

for ($i = 40; $i < 1000000000; $i+= 20) {
	switch ($i){
		case ($i % 20 != 0):
			echo $i." is not divisible by 20".PHP_EOL;
			break;
		case ($i % 19 != 0):
			echo $i." is not divisible by 19".PHP_EOL;
			break;
		case ($i % 18 != 0):
			echo $i." is not divisible by 18".PHP_EOL;
			break;
		case ($i % 17 != 0):
			echo $i." is not divisible by 17".PHP_EOL;
				break;
		case ($i % 16 != 0):
			echo $i." is not divisible by 16".PHP_EOL;
				break;
		case ($i % 15 != 0):
			echo $i." is not divisible by 15".PHP_EOL;
				break;
		case ($i % 14 != 0):
			echo $i." is not divisible by 14".PHP_EOL;
				break;
		case ($i % 13 != 0):
			echo $i." is not divisible by 13".PHP_EOL;
				break;
		case ($i % 12 != 0):
			echo $i." is not divisible by 12".PHP_EOL;
				break;
		case ($i % 11 != 0):
			echo $i." is not divisible by 11".PHP_EOL;
				break;
		case ($i % 10 != 0):
			echo $i." is not divisible by 10".PHP_EOL;
				break;
		case ($i % 9 != 0):
			echo $i." is not divisible by 9".PHP_EOL;
				break;
		case ($i % 8 != 0):
			echo $i." is not divisible by 8".PHP_EOL;
				break;
		case ($i % 7 != 0):
			echo $i." is not divisible by 7".PHP_EOL;
				break;
		case ($i % 6 != 0):
			echo $i." is not divisible by 6".PHP_EOL;
				break;
		case ($i % 5 != 0):
			echo $i." is not divisible by 5".PHP_EOL;
				break;
		case ($i % 4 != 0):
			echo $i." is not divisible by 4".PHP_EOL;
				break;
		case ($i % 3 != 0):
			echo $i." is not divisible by 3".PHP_EOL;
				break;
		case ($i % 2 != 0):
			echo $i." is not divisible by 2".PHP_EOL;
				break;
		default:
			echo $i." is divisible by 1-20!".PHP_EOL;
	}
}

?>