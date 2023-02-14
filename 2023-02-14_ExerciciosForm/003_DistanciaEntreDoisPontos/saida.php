<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Distância Entre 2 pontos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<section>
    <table>
        <tr>
            <td class="text-center">
                <?php
                $pontoA_x = $_GET["pontoA_x"];
                $pontoA_y = $_GET["pontoA_y"];
                $pontoB_x = $_GET["pontoB_x"];
                $pontoB_y = $_GET["pontoB_y"];
                $resultado = $resultado = sqrt(pow($pontoB_x - $pontoA_x, 2) + pow($pontoB_y - $pontoA_y, 2));

                echo "<h4>A distância entre A(".$pontoA_x.",".$pontoA_y.") e B(".$pontoB_x.",".$pontoB_y.") é ".$resultado."</h4>";
                ?>
            </td>
        </tr>
    </table>
</section>
</body>
</html>