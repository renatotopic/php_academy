<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02. Homework - Task 2</title>
</head>
<body>

<?php

/*
Output given alphabet: 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z' in each row without commas. 
Number of rows equals number of letters in an alphabet.
Each next row will continue from next letter of alphabet (so that we can read alphabet when looking both horizontally and vertically).
Once alphabet stops in a row it will start again, but only for number letters that need to match number of letters in the first line.
Starting from 13th position (letter m), draw a snake like pattern that will bounce of edges.
See homework2_task2.png for wanted result.
Use loops to complete the task.
*/

// $letters - alphabet
$letters = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
$letStrRep= str_replace(',', '', $letters);
// echo $letStrRep;
$letLenght = strlen($letStrRep);
echo "</br>";
// echo $letLenght;

// $mLet = 12;




?>
    
</body>
</html>