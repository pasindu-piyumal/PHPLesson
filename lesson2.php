<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP is case sensitive</title>
</head>
<body>
    <?php
    $capital = 67;
    print("variable capital is $capital<br>");
    print("variable CaPiTal is $CaPiTal"); //This one displays an error because variables are case sensitive in PHP
    ?>
</body>
</html>