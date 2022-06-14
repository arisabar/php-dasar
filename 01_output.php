<?php
//echo -output string, number, html, etc
echo 1234, 'Hello', 10.5;
// echo [1,2,3];
echo "<br>";
//print - works like echo, but can only take in a single argument
print '<br>';

//print_r() - print single values and array
// print_r([1,2,3]);

//var_dump() return more info like data type and length
var_dump("sabar");

//var_export() - similar to var_dump(). Outputs a string representation of a variable
var_export('Helo');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo 'Post One' ?></h1>
</body>

</html>