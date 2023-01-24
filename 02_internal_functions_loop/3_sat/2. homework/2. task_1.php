<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02. Homework - Task 1</title>
</head>
<body>

<?php

// define variable $name
$name = "renato";
// strrev - funkcija koja omogućava dohvat podataka 
$revStr = strrev($name);
// dužina stringa
$nameLenght = strlen($name);
// echo $nameLenght;

// $letters - alphabet
$letters = explode(',', 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z');

for($i=0;$i < $nameLenght; $i++) {
    foreach($letters as $letter) {
        if ($letter == $name[$i]) {
            echo "<strong>$letter</strong> ";
        } elseif ($letter == $name[$nameLenght -$i - 1]) {
            echo "<u>$letter</u> ";
        } else {
            echo "$letter ";
        }    
    }
    echo "<br>";
}
?>
    
</body>
</html>