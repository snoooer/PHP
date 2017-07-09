<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 09/07/17
 * Time: 00:17
 */
$time = date("H");

if ($time <= "10"){
    echo "Have a good morning!";
} elseif ($time <= "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo "<br>";

$x = 2;
switch ($x)
{
    case 1:
        echo "number 1";
        break;
    case 2:
        echo "number 2";
        break;
    default:
        echo "null";
}
?>
