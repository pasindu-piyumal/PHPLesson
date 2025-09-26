<?php

$dayOfWeek = "Wednesday";

switch($dayOfWeek){
    case "Monday":
        echo "Start of the week!";
        break;

    case "Wednesday":
        echo "Halfway there!";
        break;

    case "Friday":
        echo "Weekend is near!";
        break;
    
    default:
        echo "Enjoy your day!";
}


$weather = "rainy";

switch($weather){
    case "sunny":
        echo "It's a sunny day";
        break;

    case "rainy":
        echo "Grab a umbrella";
        break;

    default:
        echo "Click the forecast!";
}

?>