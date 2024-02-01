<?php 
$x = 10;
$y =  5;
//conditional statements
//if 
if ($x>$y) {
echo "x is greater than y";
}
echo "<br>";
//if else
if ($x>$y) {
    echo "x is greater than y";
}
else {
    echo "y is greater than y";
}
echo "<br>";
//loops
$i=1;
while ($i<5){
    echo $i;
    $i++;
}
echo "<br>";
//foreach
$products = array("apple","mango","orange","grapes");
foreach ($products as $fruits) {
    echo $fruits;
}
?>