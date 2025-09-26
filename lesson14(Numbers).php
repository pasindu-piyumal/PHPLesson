<?php

$integerOne = 42;
$integerTwo = -17;

$floatOne = 3.14;
$floatTwo = -0.75;

$sum = $integerOne + $integerTwo;
$difference = $floatOne - $floatTwo;

echo "<p>Sum: $sum</p>";
echo "<p>Difference: $difference</p>";

$absulateVal = abs($integerTwo);
$roundVal = round($floatOne);
$powerResult = pow($integerOne, 3);

echo "<p> Absulate value: $absulateVal</p>";
echo "<p> Round value: $roundVal</p>";
echo "<p> Power: $powerResult</p>";

$counter =  10;
$incremented = ++$counter;
$decremented = --$counter;

echo "<p>Counter: $counter</p>";
echo "<p>Incremented: $incremented</p>";
echo "<p>Decremented: $decremented</p>";

?>