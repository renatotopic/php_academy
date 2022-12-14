<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
<?php

$variable = 'content';

echo $variable;
echo "<br>";

echo "Use $variable inside echo  #1<hr />";
echo "<br>";

// more on https://stackoverflow.com/questions/5605965/php-concatenate-or-directly-insert-variables-in-string
echo "Use " . $variable . " inside echo #2<hr />";
echo "<br>";

// working
echo "abc{$variable}def";
echo "<br>";

// doesn't work:
echo 'abc{$variable}def'; //abc{$varijabla}def
echo "abc$variabledef"; //Notice: Undefined variable: varijabladef
echo "<br>";

// variable data types
echo gettype($variable), "\n";
//http://php.net/manual/en/function.gettype.php
echo "<br>";

echo "Display data types";
echo "<br>";
$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
    echo gettype($value), "\n";
}

echo "<br>";

$variable = 2;
echo gettype($variable), "\n";
echo "<br>";

$variable = 2.1;
echo gettype($variable), "\n";
echo "<br>";

$variable = true;
echo gettype($variable), "\n";
echo "<br>";

$variable = [1, 2, 3]; //old way array()
echo gettype($variable), "\n";
echo "<br>";

$variable = new stdClass();
echo gettype($variable), "\n";
echo "<br>";

$variable = null;
echo gettype($variable), "\n";
echo "<br>";

$variable = xml_parser_create();
echo gettype($variable), "\n"; //https://www.php.net/manual/en/resource.php

// useful functions
$variable = [1, 2, 3];
var_dump($variable);
echo "<br />";
print_r($variable);
echo "<br />";


?>
    
</body>
</html>