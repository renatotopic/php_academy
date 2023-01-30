<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03_functions_superglobal</title>
</head>
<body>
    
</body>
</html>

<?php

$str = 'random string';
$arr = [1, 2, 3, 4, 5];

/**
 * Built-in functions
 *
 * - https://www.php.net/
 */

 // strlen -  https://php.net/manual/en/function.strlen.php
echo strlen($str);
echo "<br>";
//  strtoupper - https://php.net/manual/en/function.strtoupper.php
echo strtoupper($str);
echo "<br>";
// https://php.net/manual/en/function.count.php
// Counts all elements in an array, or something in an object.
echo count($arr);
echo "<br>";

function getTime() {
    echo time();
}
// Call function
echo getTime();
echo "<br>";
echo "<hr>";

function getMeaningOfLife() {
    return 33;
}

// echo nothing
getMeaningOfLife();
echo "<br>";

echo getMeaningOfLife();
echo "<br>";
// assign value to variable

$getMoreLife = getMeaningOfLife();
echo $getMoreLife;
echo "<br>";
echo "<hr>";
/*
Passing arguments by value
The argument can be any valid expression. The expression is evaluated and its value assigned to the appropriate variable in the function. In the following function $a assigned the value 10 and $b assigned the value 20:
echo "<hr>";
*/
function add($a, $b)
{
return $a + $b;
}
// calling add function 
echo add(10, 20);
echo "<hr>";

// Default arguments values
function wage($minWage = 100)
{
    echo "The wage is: $minWage <br />";
}
// display 200
wage(200);
// display default value 100 
wage();
// display value 100 
wage(100);

/* return
The return values must be specified in the variable. If the statement is called within a function the function is terminated immediately and pass control back to the previous position from which it was called.

The return statement can return any type of data.
*/
echo "<hr>";
function cube($x)
{
    return $x * $x * $x;
}

echo "The cube of 3 is: ".cube(3)."<br />";
echo "The cube of 4 is: ".cube(4)."<br />";
echo "The cube of 5 is: ".cube(5)."<br />";
echo "<hr>";

// Function with parameters
function nameIs($name) {
    echo "Hi, {$name}!";
}

nameIs('Renato');

?>