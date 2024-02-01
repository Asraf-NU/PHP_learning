<?php //arithmetic operators
$x = 5;
$y = 10;
echo $x + $y;
echo "<br>";
//assignment operator
$employee = "Asraf";
$roll = "software engineer";
$employees ="my name is " .$employee. "working as ".$roll;
echo $employees;
echo "<br>";
//comparison operator
$x = 5;
$y = 3;
var_dump($x !== $y);
echo "<br>";
//
$qty =5;
$price =10;
$discount = $qty>3 && $price>5; 
var_dump($discount);
?>