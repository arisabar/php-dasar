<?php

$nama = "sabar";
function registerUser($nama)
{
    echo $nama . ' registered';
}

// registerUser($nama);

function sum($n1 = 0, $n2 = 0)
{
    return $n1 + $n2;
}

// echo sum();

$subtract = function ($n1, $n2) {
    return $n1 - $n2;
};

// echo $subtract(10,5);

$multiply = fn ($a = 0, $b = 0) => $a * $b;

echo $multiply();
