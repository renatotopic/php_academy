<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homework 03 - task 01</title>
</head>

<body>

  <?php
  /*
Create a custom function that accepts one string parameter and returns it reversed. 
Example input: "random string" => output: "gnirts modnar". 
Don't use built-in strrev() function.

*/

  // HOMEWORK - task 01

  // Function with parameters
  #reverseString method
  function reverseString($inpStr)
  {
    echo "The reversed string is: ";
    for ($i = strlen($reverseString) - 1; $i >= 0; $i--) {
      echo $reverseString[$i];
    }
    echo $reverseString;
  }
  #driver
  $inpStr = "CodeSpeedy Technologies";
  reverseString($inpStr);


  ?>

</body>

</html>