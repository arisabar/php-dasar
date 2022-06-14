<?php
$name = 'sabar';
$alamat = 'kelaci';
$fools = false;

var_dump($fools);

echo $name;

echo "nama saya ${name} asal ${alamat}";
echo "<br>";
echo "<br>";
echo 'nama saya ' . $name . ' asal ' . $alamat;

echo "<br>";
echo "<br>";

define('HOST', 'locahost');
define('DB_NAME', 'dev_db');

echo DB_NAME;
