<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    $price = 49.99;
    $rounded = (int) $price;

    echo "Original : $price<br>";
    echo "After casting to int : $rounded<br>";

    $quantity = "15 items";
    $number = (int) $quantity;

    echo "Original string: $quantity<br>";
    echo "After casting to int: $number";

    $amount = 0;
    $status = (bool) $amount;

    echo "Amount: $amount<br>";
    echo "After casting to bool: " . ($status ? "true" : "false") . "<br>";

    class User{
        public $name = "Alex";
        public $age = 25;
    }

    $user = new User();
    $userArray = (array) $user;
    print_r($userArray);

    ?>

</body>
</html>