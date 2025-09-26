<?php

$fruits = array("Apple", "Banana", "Orange");
echo "I like " . $fruits[0] . " , " . $fruits[1] . " , " . $fruits[2] . ". <br>" ;

$person = array("name" => "Mary", "age" => 22, "city" => "New York");
$matrix = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

echo $fruits[0] . "<br>";
echo $person["name"] . "<br>";
echo $matrix[1][2];

?>