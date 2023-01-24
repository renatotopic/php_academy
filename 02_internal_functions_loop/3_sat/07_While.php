<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>

<?php
// WHILE LOOP
// We use it when we want to execute sometime multiple time based on conditions.
// Expression in while loop is checked at the start of each iteration, and if it passes code inside is execute.
// We can change the expression inside the loop and with this manipulate when loop will stop.

$stayLoop = true;
$i = 0;

while ($stayLoop) {
    echo $i . '<br>';

    $stayLoop = ++$i<10;
}

echo '<hr />';

$i = 1;
while($i < 10){
    if($i === 7) {
        break;
    }
    echo '<hr />';

 // Infinite loop (without ++ inside)
 if($i===2){
    $i++;//
    continue;
}
echo $i++ . '<br />';
}
    echo "loop";

// more on http://php.net/manual/en/control-structures.while.php
echo '<hr>';

$x1=1;
while ($x1<=5)
{
echo "Increment Number: " . $x1 . '<br />';
echo "Hello World". '<br />';
$x1=$x1+1;
}

?>
    
</body>
</html>