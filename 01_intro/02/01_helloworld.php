<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo "hello world";
echo "<br>";

print ' world'; // No additional newline is appended
echo "<br>";

echo 'Hello', ' world'; //echo can accept more than one parameter, unlike print
echo "<br>";

echo "1", '2', "\"3\"", "'4'", '"5"';

echo "\tFirst row\nSecond row"; //If the string is enclosed in double-quotes ("), PHP will interpret the following escape sequences for special characters:
echo "<br>";

echo <<<IPA
<h1 title="Main title">
  Inchoo PHP Academy
</h1>
IPA;

?>
    
</body>
</html>