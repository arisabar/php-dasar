<?php

$fruits = ['apple', 'orange', 'pear'];

// echo count($fruits);

//search array
// var_dump(in_array('apple', $fruits));

//* Add to array
$fruits[] = 'grape';
array_push($fruits, 'banana', 'strawberry');
array_unshift($fruits, 'mango');

//* remove to array
array_pop($fruits);
array_shift($fruits);
// unset($fruits[2]);

//* split into 2 chuncks
$chuncked_array = array_chunk($fruits, 2);

print_r($chuncked_array);
print_r($fruits);

echo '<br>';
echo '<br>';
echo "<br>";

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

$keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);

$number = range(1, 20);
// print_r($number);

$newNumber = array_map(function ($number) {
    return "Number $number";
}, $number);

// print_r($newNumber);
$lessThan10 = array_filter($number, fn ($number) => $number <= 10);

// print_r($lessThan10);

$sum = array_reduce($number, fn ($carry, $number) => $carry + $number);

var_dump($sum);
