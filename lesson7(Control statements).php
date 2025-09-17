<?php

$user = "PAP";

if ($user == "John"){
    print "Hello, John";
} else {
    print "You are not John";
}

echo "<br>";

$foo = 10;

if ($foo == 0){
    echo "The variable foo is equal to 0";
} elseif (($foo > 0) && ($foo <= 5)){
    echo "The variable foo is between 1 to 5";
} else {
    echo "The variable foo is equal to $foo";
}

echo "<br>";

$d = date("D");
if ($d == "Fri"){
    echo "Have a nice weekend";
} else{
    echo "Have a nice day";
}

echo "<br>";

$d = date("D");
if ($d == "Fri"){
    echo "Have a nice day";
} elseif ($d == "Sun"){
    echo "Have a nice Sunday";
} else {
    echo "Have a nice day";
}

?>