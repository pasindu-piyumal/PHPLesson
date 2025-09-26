<?php

$mark = 120;
if($mark <= 80){
    echo "You have an A";
}

$gender = 'M';
if ($gender == 'M'){
    echo "Male";
} else {
    echo "Female";
}

echo "<br>";

$temperature = 25;
if($temperature < 10){
    echo "It's cold , bundle up";
} elseif ($temperature >= 10 && $temperature < 20){
    echo "A bit chilly, grab a light jacket!";
}else{
    echo "Perfect weather, enjoy your day!";
}

?>