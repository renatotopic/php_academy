<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with arrays</title>
</head>
<body>
<?php

// Task: Create yours or fictional family tree where each name is a key that has array of its parents attached.
// Start from yourself (you are first level).
// Parents also are keys of array of their parents (go two levels - until your grandparents, they should be indexed keys).
// If you have brothers/sisters they need to be on same level as you. var_dump array.

$familyTree = [
    'Pero' =>
    [
        'Antun' => ['Miroslav', 'Anka'],
        'Ljubica' => ['Stipan', 'Đurđica']
    ]
];

var_dump($familyTree);
echo "<hr>";

// Task: Create the $users variable that is empty array.
// Under the key (string type) that is your birth date in format dd/mm/YYYY assign your family tree data.

$users = [];
$users = ['15/10.2000' => $familyTree];

var_dump($users);
echo "<hr>";

// Task: Create the family tree array of person left or right to you in new variable.
// Add to $users variable same way as you're added (as birth date as key).
// Output last grandparent name of a choice from your collegue's array (echo)

$collegue = [
    'Đuro' => [
        'Martin' => ['Stjepan', 'Anita'],
        'Janja' => ['Jasmin', 'Jasenka']
    ]
];

var_dump($collegue);
echo "<hr>";
$users['08/08/1987'] = $collegue;
var_dump($users);
echo "<hr>";

var_dump($users['08/08/1987']['Đuro']['Martin'][0]);
echo "<hr>";

// Array functions
$arr1 = [1,2,'value1'];
$arr2 = [
    'test_key1' => 'value1',
    'test_key2' => 'value2',
];


$arr1Keys = key($arr1);
$arr2Keys = key($arr2);
$arr1Values = array_values($arr1);
$arr2Values = array_values($arr2);

var_dump(isset($arr1Keys['test_key1']));
unset($arr1Keys['test_key1']);
var_dump(isset($arr1Keys['test_key1']));

var_dump($arr1Keys);
echo "<hr>";

$url = 'https://www.php.net/manual/en/function.parse-url.php';

// parse url 
// https://www.php.net/manual/en/function.parse-url.php


// parse url return array
var_dump(parse_url($url));
echo "<hr>";
echo parse_url($url, PHP_URL_SCHEME);
echo "<hr>";

if(PHP_URL_SCHEME == 'https') {
    echo "web app use HTTPS";
}
echo "<hr>";
echo parse_url($url, PHP_URL_USER);
echo "<hr>";
echo parse_url($url, PHP_URL_PASS);
echo "<hr>";
echo parse_url($url, PHP_URL_HOST);
echo "<hr>";
echo parse_url($url, PHP_URL_PORT);
echo "<hr>";
echo parse_url($url, PHP_URL_PATH);
echo "<hr>";
echo parse_url($url, PHP_URL_QUERY);
echo "<hr>";
echo parse_url($url, PHP_URL_FRAGMENT);
echo "<hr>";
echo parse_url($url, PHP_URL_HOST);

//read more:http://php.net/manual/en/ref.array.php
//https://www.w3resource.com/php-exercises/php-basic-exercises.php
//https://www.w3resource.com/php-exercises/php-array-exercises.php

?>
    
</body>
</html>