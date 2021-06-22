<?php
/**
* Name : Catalyst-PHP-Developer-Task-02
* Date : 22-06-2021
* Dev : Chinzy Ranasinghe
* Question : Create a PHP script that is executed form the command line. The script should:
			 • Output the numbers from 1 to 100
			 • Where the number is divisible by three (3) output the word “foo”
			 • Where the number is divisible by five (5) output the word “bar”
			 • Where the number is divisible by three (3) and (5) output the word “foobar”
			 • Only be a single PHP file
* Output(ex) : 1, 2, foo, 4, bar, foo, 7, 8, foo, bar, 11, foo, 13, 14, foobar...  
**/

// generating an array from 1 to 100 using range function
$array_output = range(1,100);

// foreach the array_output to validate the numbers and replace the required using the given texts
foreach ($array_output as $key => $value) {

	if(($value%3==0) && ($value%5==0)){ // checking whether the number is divisable by both 3 and 5, and if so, replacing value to "foobar".

		$array_output[$key] = 'foobar';

	}elseif ($value%5==0) { // checking whether the number is divisable by 5 and if so, replacing value to "bar"

		$array_output[$key] = 'bar';

	}elseif ($value%3==0) { // checking whether the number is divisable by 3 and if so, replacing value to "foo"

		$array_output[$key] = 'foo';

	}
}

// outputting the final result array
print implode(',', $array_output);

?>