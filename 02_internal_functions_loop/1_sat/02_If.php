<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF </title>
</head>
<body>

<?php
var_dump(true);
var_dump(false);
echo '<hr>';

// true
if (true) {
    echo 'true';
}
echo '<hr>';

// false
if (false) {
    echo 'false';
}
echo '<hr>';

$i = 3;
// Loose equal operator - equality (value comparison)
if ($i == 3) {
    echo ' i equals 3 ';
}
echo '<hr>';

var_dump($i == 3);

// Strict equal operator - identity (both value and data type comparison - important)
if ($i === 3) {
    echo ' i equals 3 ';
}
echo '<hr>';

// Note the data type of '3' in this comparison
if ($i === '3') {
    echo ' i equals 3 ';
}
echo '<hr>';
var_dump($i === '3');
echo '<hr>';

// string compare
$letter = 'cde';

if ($letter == 'cde') {
    echo 'right';
}
echo '<hr>';

// IF - ELSE - example

$i = 15;

if ($i === 3) {
    echo 'OK';
} else {
    // else - other cases
    echo 'not defined number';
}
echo '<hr>';

// nesting IFs

$i = 3;

// first level
if ($i > 0) {
    // second level
    if ($i > 1) {
        echo 'value is greater than 1';
        echo '<hr>';
    }

    // logical operators
    if ($i < 15 && $i > 2) {
        echo 'Value is less than 15 and greater than 1';
        echo '<hr>';
    }

    if ($i < 15 || $i > 3) {
        echo 'less than 15 OR greater than 1';
        echo '<hr>';
    }
}



?>
    
</body>
</html>