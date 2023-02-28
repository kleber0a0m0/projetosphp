<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center mt-4">Criador de retânguslos</h2>
                <h4 class="text-center">Preencha os campos corretamente:</h4>
                <form action="saida.php" method="get">
                    <div class="mb-3">
                        <label class="form-label">Largura:</label>
                        <input type="number" class="form-control" name="largura" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Altura:</label>
                        <input type="number" class="form-control" name="altura" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Caractere da borda:</label>
                        <input type="text" class="form-control" name="caractereBorda" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cor da borda:</label>
                        <input type="color" class="form-control" style="height: 50px;" value="#ff0000" name="corBorda" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Caractere de prenchimento:</label>
                        <input type="text" class="form-control" name="caracterePreenchimento" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cor de preenchimento:</label>
                        <input type="color" class="form-control" style="height: 50px;" value="#00ff00" name="corPreenchimento" required>
                    </div>
                    <button type="submit" class="btn btn-primary text-center">Gerar retângulo</button>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>