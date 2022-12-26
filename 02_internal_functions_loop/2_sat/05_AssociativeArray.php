<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative arrays</title>
</head>
<body>
<?php

$arr = [
    'id' => 1,
    'name' => 'John'
];

echo $arr['name'];
echo "<hr>";

echo "<pre>";
print_r($arr);
echo "</pre>";

// create arr from string
$cars = "bmw audi vw ford kia subaru opel";
$cars = explode(" ", $cars);

// lošiji način
echo $cars[0] . "\n";
echo $cars[1] . "\n";
echo $cars[2] . "\n";
echo $cars[3] . "\n";
echo $cars[4] . "\n";
echo $cars[5] . "\n";
echo $cars[6] . "\n";

echo "<hr>";


// bolji način
$values = array_keys($cars); 
$sum_cars = count($cars);  
    
for($i=0; $i < $sum_cars; ++$i) { 
    echo $cars[$values[$i]] . "\n"; 
}

// Join array elements with a string
// example ordered list
$elements = array('a', 'b', 'c');

echo "<ul><li>" . implode("</li><li>", $elements) . "</li></ul>";
echo "<hr>";

// second example
$array = ['lastname', 'email', 'phone'];
var_dump(implode(",", $array));

?>
    
</body>
</html>