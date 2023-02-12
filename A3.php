<?php


// question 1:  Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

function check_even_or_odd($number)
{
    if ($number % 2 == 0) {
        return "Number is Even";
    } else {
        return "Number is Odd";
    }
}

echo check_even_or_odd(825);

echo "\n";
echo "============= \n";

// question 2: 1+2+3...…….100  Write a loop to calculate the summation of the series

function sum_one_to_hundred ()
{
    $sum = 0;
    for($i=1;$i<=100;$i++){
        $sum+=$i;
    }
    return $sum;
}

echo sum_one_to_hundred();
