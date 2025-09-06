<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operators</title>
</head>
<body>
    <?php
    $a = 42;
    $b = 20;

    $c = $a + $b;
    echo "Addition operation result: $c<br>";

    $c = $a - $b;
    echo "Substraction operation result: $c<br>";

    $c = $a * $b;
    echo "Multiplication operation result: $c<br>";

    $c = $a / $b;
    echo "Division operation result: $c<br>";

    $c = $a % $b;
    echo "Modulus operation result: $c<br>";

    $c = $a++;
    echo "Increment operation result: $c<br>";

    $c = $a--;
    echo "Decrement operation result: $c<br>";
    ?>
</body>
</html>