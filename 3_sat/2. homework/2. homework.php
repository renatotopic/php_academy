<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. Homework</title>
</head>
<body>

<?php

$name = "Renato";
$nameLenght = strlen($name);
// echo $nameLenght;

$letters = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
// $showText = explode(" ", $letters);
//remove all commas from string
$let = str_replace(',', '', $letters);
// echo $let;

$x=0;
do {
echo $let . "<br />";

$x=$x+1;
}while ($x<$nameLenght)



?>
    
</body>
</html>