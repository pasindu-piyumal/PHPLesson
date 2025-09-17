<?php
$string1 = "Hello";
$string2 = "PHP";
$string3 = $string1 . " " . $string2;
print $string3;

echo "<br>";

// Automatic conversion from a number to a string
$number = 1234 * 5678;
echo substr($number, 3, 1);

echo "<br>";

// Automatic conversion from a string to a number
$pi = "3.14";
$rad = 5;
echo $pi * ($rad * $rad);
?>