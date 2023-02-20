<?php


/*
   1.Write a PHP function to sort an array of strings by their length, in ascending order.
     (Hint: You can use the usort() function to define a custom sorting function.)
*/

function sortArray($strings)
{
    usort($strings,function($a,$b){
        return strlen($a) - strlen($b);
    });
    return $strings;
}

$sorted_string_array = sortArray(['herooo','heroo','hero']);

print_r($sorted_string_array);



/*
   2.Write a PHP function to concatenate two strings, 
     but with the second string starting from the end of the first string.
*/

function concatenate_string($s1,$s2)
{
    return $s1.$s2;
}

echo concatenate_string('hi I am well ','and sound now');



/*
    3.Write a PHP function to remove the first and last element from an array 
      and return the remaining elements as a new array.
*/
function remove_first_and_last($array)
{    
    array_shift($array);
    array_pop($array);
    return $array;
}

print_r( remove_first_and_last( [1,7,2,3,4,0] ) );



/*
    4.Write a PHP function to check if a string contains only letters and whitespace.
*/
function check_string($string)
{
    if ( preg_match('/^[a-zA-Z\s]+$/', $string))
    {
        echo "given string contains only letters and whitespace \n";
    } else {
        echo "given string does not contain only letters and whitespace \n";
    }
}
check_string('hi efthakhar ');


/*
    5.Write a PHP function to find the second largest number in an array of numbers.
*/
$numbers = [1,3,8,25,6,25,39,39];

function find_second_largest($numbers)
{
    $unique_array = array_unique($numbers);

    sort($unique_array);

    return $unique_array[count($unique_array)-2];
}
echo find_second_largest($numbers);
    


?>