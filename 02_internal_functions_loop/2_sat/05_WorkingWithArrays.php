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

?>
    
</body>
</html>