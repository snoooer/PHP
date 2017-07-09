<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 09/07/17
 * Time: 00:47
 */
for ($x=0 ; $x <= 9 ; $x++){
    echo "The number is :",$x;
    echo "<br>";
}

$colors = array("red","white","blue","green");
foreach ($colors as $color) {
    echo $color,"<br>";
}

$colors = ["a" => "red","b" => "green","c" => "blue","d" => "white"];
foreach ($colors as $key => $value){
    echo $key,"=>",$value,"<br>";
}
?>