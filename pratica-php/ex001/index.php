<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num1 = 10;
    $num2 = "10";

    if ($num1 === $num2) {
        echo "Os numeros sao iguais e do mesmo tipo";
    } elseif ($num1 == $num2) {
        echo "Os numeros sao iguais, mas de tipos diferentes";
    } else {
        echo "Os numeros sao diferentes";
    }
    ?>
</body>

</html>