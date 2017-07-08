<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 08/07/17
 * Time: 19:17
 */
/**
 * 使用define()函数。有三个参数
 * 第一个定义常量名称；
 * 第二个定义常量的值；
 * 第三个定义常量名是否对大小写敏感。默认false，true表示不区分大小写；
 */
define("Gretting","Hello,World!");
echo Gretting;
echo "<br>";
define("Gretting","Hello,World!",true);
echo gretting;
?>