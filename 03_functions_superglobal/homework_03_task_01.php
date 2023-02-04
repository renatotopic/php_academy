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
Don't use built-in strrev() function

*/

  // HOMEWORK - task 01

  // 1 solution 
  $myString = "Welcome to the IT sector";

  // strlen - length of string
  $Strlength = strlen($myString);
 
// Reverse and Print string without using strrev()
for($i=$Strlength -1;$i >=0; $i--){
    echo $myString[$i]; //. '<br>'
}    

echo "<hr>";

  // 2 solution 

  //Declare string variable
$StrVal= "ladies and gentlemen";
 
//Reverse string 
$myStrRev= implode(array_reverse(str_split($StrVal)));
 
//Print reverted string
echo $myStrRev;


// 3 solution

$array = ['ladies and gentlemen'];
$imploded_array = implode( '', array_reverse($array));;



  ?>

</body>

</html>