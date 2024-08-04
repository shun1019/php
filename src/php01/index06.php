<?php
// function outputNumber($a)
// {
//     echo "引数の値は" . $a . "です";
//     return;
// }

// outputNumber(2);

// function outputHello()
// {
//     echo "Hello world";
// }

// outputHello();

// function text($number1, $number2)
// {
//     $value = $number1 + $number2;
//     return $value;
// }

// $total = text(2, 3);
// echo $total;

function totalPoint($base, $height, $ni)
{
    $total = $base * $height / $ni;
    return $total;
}
echo (totalPoint(80, 60, 2));
