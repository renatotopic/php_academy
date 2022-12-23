<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed arrays</title>
</head>
<body>

<?php
// Arrays - lists of items (items being variables, constants, other arrays, objects, etc..)
// INDEX ARRAYS - numerical keys in array

$arr = array(2,3,4,5);
echo "print values: ";
echo "<pre>";
var_dump($arr);
echo "</pre>";
echo "<hr>";

// new syntax
$arr = ['2',3,4,5,5]; 
echo "print values: ";
echo "<pre>";
var_dump($arr);
echo "</pre>";
echo "<hr>";

// multidimensional array
echo "print values: ";
echo "<pre>";
var_dump([6,2,3, [1,2,3]]);
echo "</pre>";
echo "<hr>";

// count number of elements in array
echo "number of elements in array: " . count($arr);
echo "<hr>";

// display first of array(! array start with 0)
echo "first element od array: ";
echo $arr[0], PHP_EOL;
echo "<hr>";

// last element
// count number of elements in array and substract by 1. Reason: array start with 0 
echo $arr[count($arr)-1], PHP_EOL; 
echo "last element od array: ";
print_r($arr);
echo "<hr>";

// Variable check (used with arrays primarily)
if(isset($arr[2])){
    echo "IS SET KEY 4";
} elseif (isset($array[4])){
    echo "IS SET KEY 5";
}
echo "<hr>";

// add element into array
$arr[] = 'Osijek';
echo $arr[count($arr)-1], PHP_EOL;
print_r($arr);
echo "<hr>";

define("TEST123", "test1234");
                                                   
$testArr = [
    1,
    'string',
    TEST123,
    [],
    [[1234], ['stringtest']]
];

var_dump($testArr);

in_array('string1', $testArr, true);
in_array('string2', $testArr, true);

?>
    
</body>
</html>