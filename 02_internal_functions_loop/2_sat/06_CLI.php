<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLI</title>
</head>
<body>
<?php
//Two variables are defined right away: $argv and $argc
print_r($argv); // array always has the minimum length of 1. $argv[0] is file name
print_r($argc); // argc gives first param
echo PHP_EOL;

print_r($argv);
print_r($argc);
echo PHP_EOL;

// Any difference? The rest are arguments.
//This two variables can also be accessed as superglobal variable under $_SERVER['argv'] and $_SERVER['argc'] (more on Friday)

// Task: Create index array with days of the week (Monday, ... Sunday)
// based on numerical input argument (0 being Monday),
// output the day of week from array, implement check if number exists in array with isset().
// if input is not number, output the error: 'Please use number lesser than 7 as argument'

$days = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
];
if (isset($days[$argv[1]])) {
    echo $days[$argv[1]];
} else {
    echo 'Please use number lesser than 7 as argument';
}

?>
    
</body>
</html>