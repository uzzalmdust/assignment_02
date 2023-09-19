<?php

//0 1 1 2 3 5 8 13 21 34


function Fibonacci($number){

$number1 = 0;
$number2 = 1;

for($i=0; $i< $number; $i++){
    
    echo ' '.$number1;
    $number3 = $number2 + $number1;
    $number1 = $number2;
    $number2 = $number3;
}
}

Fibonacci(15);
