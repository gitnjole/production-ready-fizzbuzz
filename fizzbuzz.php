<?php

$nums = range(1,3);

$result = array_map(function ($num) {
    $output = '';

    if ($num % 3 == 0) $output .= 'Fizz';
    if ($num % 5 == 0) $output .= 'Buzz';

    return $output ?: $num;
}, $nums);

print_r($result);

