<?php

$counter = 1;

while($counter<=5){
    echo "Iteration $counter : Hello, world! <br>";
    $counter++;
}

$num = 3;

while($num > 0):
    echo "Countdown: $num <br>";
    $num--;
endwhile;

$condition = true;
while($condition){
    echo "This loop runs indefinitely <br>";
    if(){
        $condition = false;
    }
}

?>