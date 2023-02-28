<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fatorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center mt-4">Fatorial:</h2>
            <?php
            echo "<div class='text-center mt-4'>";
                $numero = $_GET["numero"];
                $fat = 1;
                for ($j = $numero;$j>=1;$j--){
                    $fat = $fat * $j;
                    if($j!=1){
                    }
                }
                echo "<h6>O fatorial de ". $numero. " é ".$fat."</h6> <br>";

                $fat = 1;
                for ($j = $numero;$j>=1;$j--){
                    echo $j;
                    $fat = $fat * $j;
                    if($j!=1){

                        echo " * ";
                    }
                }
                echo " = ".$fat;
            echo "</div>"
            ?>


        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
