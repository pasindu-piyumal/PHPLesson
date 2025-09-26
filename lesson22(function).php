<?php

function greet(){
    echo "Hello, world! <br>";
}
greet();

function greetUser($name){
    echo "Hello, $name! <br>";
}

function add($a, $b){
    return $a + $b;
}

greetUser("Alice");
Echo "Sum: " . add(3, 5) . "<br>";

function factorial($n){
    if($n <= 1){
        return 1;
    } else{
        return $n * factorial($n - 1);
    }
}

echo factorial(5)

?>