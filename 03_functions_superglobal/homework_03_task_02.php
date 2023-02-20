<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homework 03 - task 02</title>
</head>

<body>

  <?php
  /*
  Create a custom function to calculate and return the factorial of a number. 
  Example input: 5 => output: 120. 
  Using recursion gives extra points. https://en.wikipedia.org/wiki/Factorial.

  */

  // HOMEWORK - task 02

  // 1 solution 

/* Define a variable and assign a value to it to find the factorial.*/

function Factorial($number){
  $f = 1;
  for($i = 1; $i <= $number; $i++){ 
  $f = $f * $i;
  }
  return $f;
}

  // execute code
  $value = Factorial(5);
  echo "Factorial = $value";

  ?>

</body>

</html>