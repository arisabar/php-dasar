<?php

// for ($i = 0; $i < 10; $i++) {
//     echo "sabar $i x <br>";
// }

// $x = 1;

// while ($x <= 10) {
//     echo "angka $x <br>";
//     $x++;
// }

// $x = 10;

// do {
//     echo "number $x </br>";
//     $x++;
// } while ($x <= 5);

$posts = ['First Post', 'Second Posts', 'Third Post'];

// for ($x = 0; $x <br count($posts); $x++) {
//     echo $posts[$x] . '<br>';
// }

foreach ($posts as $i => $x) {
    echo "$i - $x <br>";
}

$objects = [
    'firstName' => 'Sabar',
    'lastName' => 'Subakti',
    'email' => 'sabarSUbakti@gmail.com'
];
echo "<br>";
echo "<br>";
echo "<br>";
foreach ($objects as $key => $value) {
    echo "$key == $value </br>";
}
