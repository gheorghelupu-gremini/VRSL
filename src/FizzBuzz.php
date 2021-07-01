<?php

namespace TestWebinar;

class FizzBuzz
{
    public function getResponse($number)
    {
        $response = null;

        if ($number % 3 == 0) {
            $response = 'Fizz';
        }
        if ($number % 5 == 0) {
            $response .= 'Buzz';
        }
        return $response ?: $number;
    }
}