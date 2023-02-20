<?php
//1.  Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

function sortByLength($array) {
    usort($array, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $array;
}
$array = array("apple", "banana", "cherry", "date", "elderberry");
$sortedArray = sortByLength($array);
print_r($sortedArray);


//2. Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function concatenate($x, $y) {
    return $x . strrev($y);
}

echo concatenate('Hello', 'Word');

//3. Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
function remove_first_and_last(array $array): array {
    array_shift($array);
    array_pop($array);
    return $array;
}
$original_array = array('apple', 'banana', 'cherry', 'date');
$new_array = remove_first_and_last($original_array);
print_r($new_array);


//4. Write a PHP function to check if a string contains only letters and whitespace.

function check_string($string) {
    return ctype_alpha(str_replace(' ', '', $string));
}

echo check_string('fff') ? 'true' : 'false';
echo"\n";

//5 Write a PHP function to find the second largest number in an array of numbers.
function find_second_largest(array $numbers): int {
    $largest = $numbers[0];
    $second_largest = $numbers[0];
    
    foreach ($numbers as $number) {
        if ($number > $largest) {
            $second_largest = $largest;
            $largest = $number;
        } else if ($number > $second_largest && $number != $largest) {
            $second_largest = $number;
        }
    }
    
    return $second_largest;
}
$numbers = array(10, 5, 20, 15, 25);
$second_largest = find_second_largest($numbers);
echo "The second largest number is: " . $second_largest;
