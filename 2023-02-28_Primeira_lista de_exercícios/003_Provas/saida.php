<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Análise de Provas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center mt-4">Resultado:</h2>
            <div class="mt-4">
                <?php
                $totalProva1 = $_GET["totalProva1"];
                $totalProva2 = $_GET["totalProva2"];
                $notaProva1 = $_GET["notaProva1"];
                $notaProva2 = $_GET["notaProva2"];

                $total = $totalProva1 + $totalProva2;

                $porcentagem1 = round(($notaProva1 / $totalProva1) * 100);
                $porcentagem2 = round(($notaProva2 / $totalProva2) * 100);

                $pontos = $notaProva1 + $notaProva2;

                $porcentagemTotal = round(($pontos / $total) * 100);

                if ($porcentagemTotal < 60) {
                    $conceito = "Péssimo";
                } elseif ($porcentagemTotal < 70) {
                    $conceito = "Ruim";
                } elseif ($porcentagemTotal < 80) {
                    $conceito = "Bom";
                } elseif ($porcentagemTotal < 90) {
                    $conceito = "Ótimo";
                } else {
                    $conceito = "Excelente";
                }

                echo "O valor total das duas provas é $total pontos. <br>";
                echo "Em relação à Prova 1, o aluno obteve $porcentagem1% do total. <br>";
                echo "Em relação à Prova 2, o aluno obteve $porcentagem2% do total. <br>";
                echo "O aluno totalizou, com as duas provas, $pontos pontos. <br>";
                echo "A porcentagem obtida pelo aluno em função do total foi de $porcentagemTotal%. <br>";
                echo "O conceito do aluno foi: $conceito.";
                ?>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
