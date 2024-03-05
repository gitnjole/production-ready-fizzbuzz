<?php

class FizzBuzz {

    public function __construct(
        private array $numbers
    ) {}

    public function getAnswer() {
        return array_map(function ($num) {
            $output = '';

            if ($num % 3 == 0) $output .= 'Fizz';
            if ($num % 5 == 0) $output .= 'Buzz';

            return $output ?: $num;
        }, $this->numbers);
    }
}

$numbers = range(1, 3);
$fizzBuzz = new FizzBuzz($numbers);
$answer = $fizzBuzz->getAnswer();

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