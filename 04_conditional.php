<?php

$number = 20;

// if ($number >= 18) {
//     echo "your are 20";
// } else {
//     echo " under me";
// }

// $t = date("t");

// if ($t < 12) {
//     echo "Good Morning";
// } else if ($t < 17) {
//     echo "GOod Afternoon";
// } else {
//     echo "good evening";
// }

$favcolor = 'red';

switch ($favcolor) {
    case 'red':
        echo "color red";
        break;
    case 'blue':
        echo "color blue";
        break;
    default:
        echo "Unknown";
}
