<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
</head>
<body>

<?php
// DO-WHILE LOOP
// Same as while loop, but expression is checked on the end of each iteration (which means that it is executed at least once)
$i = 0;
do {
    echo $i . "<br />";
} while (++$i < 10);


echo "<hr>";

$x1=1;
do {
echo "Increment Number : $x1 <br />";
echo "Hello World  <br />";
$x1=$x1+1;
}while ($x1<=5);

echo "<hr>";

$x1=0;
do {
echo "Increment Number : $x1 <br />";
echo "Hello World <br />";
$x1=$x1+1;
}while ($x1>5)

?>
    
</body>
</html>