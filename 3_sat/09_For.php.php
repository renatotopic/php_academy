<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>

<?php
// FOR LOOP
// Used when we know how much times script will execute.
// Expression 1 ($i = 0) is executed and used
// Expression 2 ($i < 10) is checked on each iteration (if it is true or false), if ok loop is executed, if not it is stopped
// Expression 3 ($i++) is executed at the end of the loop (used to control the loop)

// for ( initialize counter ; test counter ; increment counter)
// {
// execute the statement;
// }

echo "<hr>";

for($i=0; $i<10; $i++){
    echo $i, '<br>';
}


echo "<hr>";    

for ($i=0; $i<100; $i++){
    if ($i===5){
        break; // ending the loop sooner
    }
    if ($i!=3){
       continue;  // skipping
    }

    echo $i. "$i Osijek<br/>";
   
}

echo "<hr>";

// Counting number of times a word present in a sentence.

$text="The quick brown Fox jumps over the lazy Dog";
$words = explode(" ", $text); // explode function looks for " " and creates an array, where each word is an element of the array
$now = count($words);
$j = 0;
for($i=0; $i<$now; $i++)
{
if ($words[$i] == "the" or $words[$i] == "The")
{
$j =  $j+1;
}
}
echo $j;


echo "<hr>";


?>
    
</body>
</html>