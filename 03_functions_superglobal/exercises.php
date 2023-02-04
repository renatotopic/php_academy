<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
</head>
<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<body>

<?php

/**
 * Exercise #1
 *
 * The function needs to take one integer argument and check if is an even or odd number.
 * If the number is even function needs to return the string 'even', otherwise it returns string 'odd'.
 * If the number is zero return string 'zero'.
 */

 function EvenOdd(int $number): string {
    if ($number === 0) {
        return 'zero';
    }
    // one line if statement (Condition)?(thing's to do if condition true):(thing's to do if condition false);
    return $number % 2 === 0 ? 'even' : 'odd'; // ternary operator
 }

echo EvenOdd(2);
echo '<br>';
echo EvenOdd(5);
echo '<br>';
echo EvenOdd(7);

echo '<hr>';

/**
 * Exercise #2
 *
 * Create a cookie in the browser and try to read value.
 */
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
  }

  echo '<hr>';
  
  /**
 * Exercise #3
 *
 * Find where is session data stored on the server (hint: phpinfo())
 */
phpinfo();

                                                                                                                                        
?>
    
</body>
</html>