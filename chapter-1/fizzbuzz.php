<?php

$array = range(1,3);

$answer = array_map(function ($number) {
    $output = '';

    if ($number % 3 == 0) $output .= 'Fizz';
    if ($number % 5 == 0) $output .= 'Buzz';

    return $output ?: $number;
}, $array);

print_r($answer);

/**
 * Output:
 * 
 * Array
 * (
 *      [0] => 1,
 *      [1] => 2,
 *      [2] => Fizz
 * )
 */