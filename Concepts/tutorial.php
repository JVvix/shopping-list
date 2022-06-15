<?php
// script goes here

// echo "Hello & Welcome to Simplylilearn";

/* $str = "Hello and Welcome";
$num = 9999;
$float = 9.99;
echo "<h1>" . $str . "</h1>";
echo "<h2>" . $num . "</h2>";
echo "<h3>" . $float . "</h3>";

$laptop_brand = array("HP", "Lenovo", "Asus", "Samsung");
echo var_dump($laptop_brand[1]);

define("laptops", ["HP", "Lenovo and ", "Asus"]);
echo laptops[2];

$var = 9;
if($var % 2 == 0 && $var % 3 == 0) {
	echo "divisible by both!!";
} elseif ($var % 2 == 0) {
	echo "divisible by two";
} elseif ($var % 3 == 0) {
	echo "divisible by three";
} else {
	echo "the condition did not meet";
}
 */
$level = 3;
switch($level) {
case 1:
	echo "you are playing at EASY level";
break;
case 2:
	echo "you are playing at MODERATE level";
break;
case 3:
	echo "you are playing at HARD level";
break;
case 4:
	echo "you are playing at EXTREME level";
break;
default:
	echo "invalid input";
};
?>
