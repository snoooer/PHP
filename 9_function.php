<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 09/07/17
 * Time: 01:31
 */
function writeMsg (){
    echo "Hello,World!";
}

function FirstName ($fn) {
    echo "Hello,",$fn;
}

function sum ($x,$y) {
    $z = $x + $y;
    return $z;
}

writeMsg();
echo "<br>";
FirstName("ggg");
echo "<br>";
echo "3 + 7 = ",sum(3,7);
?>