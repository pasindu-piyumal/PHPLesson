<?php

$num1 = 10;
$num2 = 5;

$sum = $num1 + $num2;
$different = $num1 - $num2;

echo "<p>Sum: $sum</p>";
echo "<p>Differrent: $different</p>";

$isEqual = $num1 == $num2;
$isNotEqual = $num1 != $num2; 

echo "<p>Equal: " . var_export($isEqual, true) . "</p>";
echo "<p>Not Equal: " . var_export($isNotEqual, true) . "</p>";

$isSunny = true;
$isWarm = true;

$goForWalk = $isSunny && $isWarm;
$goForShopping = $isSunny || $isWarm;

echo "<p> Go for a walk: " . var_export($goForWalk, true) . "</p>";
echo "<p> Go for a shopping: " . var_export($goForShopping, true) . "</p>";

?>