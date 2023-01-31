<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04_Super_globals</title>
</head>
<body>

<?php

// https://www.w3schools.com/php/php_superglobals_server.asp


/**
 * Superglobals — Superglobals are built-in variables that are always available in all scopes
 *   - $GLOBALS
 *   - $_SERVER
 *   - $_GET
 *   - $_POST
 *   - $_COOKIE
 *   - $_REQUEST
 *   - $_SESSION
 *   - $_FILES
 *   - $_ENV
 */

 // References all variables available in global scope
 var_dump($GLOBALS);
echo '<hr>';

// Server and execution environment information
var_dump($_SERVER);
echo '<hr>';
var_dump($_SERVER);

echo $_SERVER['SERVER_NAME'];

var_dump($_SERVER);

echo $_SERVER['HTTP_HOST'];
echo '<hr>';

/** $_GET */
// 04_super_globals/get.php

/** $_POST */
// 04_super_globals/post.php

// HTTP Request variables
// By default contains the contents of $_GET, $_POST and $_COOKIE.
var_dump($_REQUEST);
echo '<hr>';

/** $_COOKIE */
// 04_super_globals/cookie.php

/** $_SESSION */
// 04_super_globals/session.php

/** $_FILE */
// 04_super_globals/file.php

// Variables passed to the current script via the environment method
var_dump($_ENV);
var_dump(getenv());



?>
    
</body>
</html>