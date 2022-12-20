<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>

<?php

// https://www.php.net/manual/en/control-structures.switch.php

$grade = 6;


switch ($grade) {
    case 1:
        echo 'Nedovoljan';
        break;
    case 2:
        echo 'Dovoljan';
        break;
    case 3:
        echo 'Dobar';
        break;
    case 4:
        echo 'Vrlo dobar';
        break;
    case 5:
        echo 'Izvrstan';
        break;
    default:
        echo 'Ne postoji navedena ocjena';
}
echo '<hr>';

$i = 1;
//$i = 2;
switch ($i) {
    case 0:
        echo 'i equals 0';
        echo '<br>';
    case 1:
        echo 'i equals 1';
        echo '<br>';
    case 2:
        echo 'i equals 2';
        echo '<br>';
}
// ispis i equals 1 // i equals 2
// potrebno je koristiti break

$i = 0;

switch ($i) {
    case 0:
        echo 'i equals 0';
        break;
        echo '<br>';
    case 1:
        echo 'i equals 1';
        break;
        echo '<br>';
    case 2:
        echo 'i equals 2';
        break;
        echo '<br>';
}
echo '<br>';

// task
// output remaining days of the week including today and weekend days, separated by comma

// HINT - Prints the day
// echo date("l") . "<br>";
// Tuesday


$day = date('l');
switch ($day) {
    case 'Monday':
        echo 'Monday, ';
    case 'Tuesday':
        echo 'Tuesday, ';
    case 'Wednesday':
        echo 'Wednesday, ';
    case 'Thursday':
        echo 'Thursday, ';
    case 'Friday':
        echo 'Friday, ';
    case 'Saturday':
        echo 'Saturday, ';
    case 'Sunday':
        echo 'Sunday ';
}

?>
    
</body>
</html>