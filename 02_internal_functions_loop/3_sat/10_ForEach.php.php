<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>

<?php

$fruits = array ("Orange", "Apple", "Banana",  "Cherry", " Mango");
foreach ( $fruits as $value )
{
echo  "$value<br />";
}

echo "<hr>";

$personal_details=array("name" => "Pero", "occupation" => "the king", "age" => 37, "country" => "India");
foreach ( $personal_details as $key => $value )
{
echo "$key=$value<br />";
}

?>
    
</body>
</html>