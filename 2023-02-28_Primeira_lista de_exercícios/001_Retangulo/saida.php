<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criador de retângulos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center mt-4">Retângulo gerado:</h2>
            <?php


            echo "<div class='text-center mt-4'>";
                $largura = $_GET["largura"];
                echo "<h6>Largura: ". $largura. "</h6> <br>";

                $altura = $_GET["altura"];
                echo "<h6>Altura: ". $altura."</h6> <br>";

                $caractereBorda = $_GET["caractereBorda"];
                echo "<h6>Caractere da Borda: ". $caractereBorda."</h6> <br>";

                $corBorda = $_GET["corBorda"];
                echo "<h6>Cor da Borda: ". $corBorda."</h6> <br>";

                $caracterePreenchimento = $_GET["caracterePreenchimento"];
                echo "<h6>Caractere de Preenchimento: ". $caracterePreenchimento."</h6> <br>";

                $corPreenchimento = $_GET["corPreenchimento"];
                echo "<h6>Cor de Preenchimento: ". $corPreenchimento."</h6> <br>";

            echo "</div>";

            echo "<div class='table-responsive'>";
                echo "<table class='table' style=\"height: 150px; width=150px\">";
                for ($i = 0;$i<$altura;$i++){
                    echo "<tr>";
                    for ($j = 0;$j<$largura;$j++){
                        if($i==0 || $i==$altura-1 || $j==0 || $j==$largura-1){
                            echo '<td style="color:'.$corBorda.'; border:3px solid '.$corBorda.'" class="text-center h1">'.$caractereBorda.'</td>';
                        }else{
                            echo '<td style="color:'.$corPreenchimento.'; border:3px solid '.$corPreenchimento.'" class="text-center h1">'.$caracterePreenchimento.'</td>';
                        }
                    }
                    echo "</tr>";
                }

                echo "</table>";
            echo "</div>";
            ?>


        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
