<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Types</title>
</head>
<body>
    <?php
    $int_var = 12345;
    $another_int = -12345+12345;
    print($another_int+$int_var);
    print("<br>");

    $many = 2.2888800;
    $many_2 = 2.2111200;
    $few = $many + $many_2;
    print("$many + $many_2 = $few<br>");

    $string_1 = "This is a string in double quotes";
    $string_2 = "This is somewhat longer, singly quoted string";
    $string_39 = "This string has thirty-nine characters";
    $string_0 = ""; //A string with zero characters

    $variable = "name";
    $literally = 'My $variable will not print<br>';
    print($literally);
    $literally = "My $variable will print";
    print($literally);
    ?>
</body>
</html>