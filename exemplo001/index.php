<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor = 1;
        echo "Valor: $valor <br>";
        echo 'Valor: $valor <br>';
        echo 'Valor: '.$valor.'<br>';

        $n1 = 5;
        $n2 = 4;

        $n1 = (--$n1) + $n2;

        echo $n1;

        echo '<br>----------------------<br>';
        $k1 = 4;
        $k2 = 8;
        $a = (($k1==$k2) || ($k1 + $k2 == 12));
        echo $a;

    ?>
</body>
</html>