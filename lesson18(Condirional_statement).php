<?php

$t = date("Hi");

if ($t < "12"){
    echo "Have a good morning";
} elseif ($t < "20") {
    echo "Have a good day!";
} else{
    echo "Have a good night";
}

?>