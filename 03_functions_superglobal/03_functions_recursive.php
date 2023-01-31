<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03_functions_recursive.php</title>
</head>
<body>

<?php
/**
 * Recursive functions
 * 
 * recursion occurs when a function calls itself
 * Recursion can be thought of as an alternative to iteration — that is, while and for loops.
 * 
 */

function countBackwards(int $number) {
    echo $number, '<br>';

    if ($number > 0) {
        $number--;
        countBackwards($number);
    }
}
countBackwards(10);

echo "<hr>";
// example 2 

function display($number) {    
    if($number<=5){    
     echo "$number <br/>";    
     display($number+1);    
    }  
}    
    
display(1);    


?>
    
</body>
</html>