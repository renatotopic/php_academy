<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02_functions_anonymous</title>
</head>
<body>

<?php
/**
 * Anonymous functions
 */

 $func = function() {
    echo "this is a anonymous function";
 };

 // call anonymous function from the variable
 $func();

$customSort = function($a, $b) {
    // spaceship operator (-1, 0, 1)
    return $a <=> $b;
};
echo "<hr>";

$numbers = [12, 5, 3, 6, 11, 23];
// boolean usort( $array, "function_name");
usort($numbers, $customSort); //sort array with custom function
var_dump($numbers);
echo "<hr>";


?>
    
</body>
</html>