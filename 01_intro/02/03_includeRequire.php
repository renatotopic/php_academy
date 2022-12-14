<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include - require</title>
</head>
<body>

<?php

// 1. example
include "01_helloworld.php"; //http://php.net/manual/en/function.include.php

include "xx_helloworld.php"; //http://php.net/manual/en/function.require.php

//https://stackoverflow.com/questions/3633900/difference-between-include-and-require-in-php

include "01_helloworld.php"; //Include has failed but the script continued executing. Only warning is thrown


// 2. example
require "xx_helloworld.php";

include "01_helloworld.php"; //Require throws Fatal error and script aborts execution

// 3. example
include "01_helloworld.php";

include_once "01_helloworld.php"; //It will not be included in this case. Same for require_once

?>
    
</body>
</html>