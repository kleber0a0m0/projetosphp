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
                <h2 class="text-center mt-4">Análise de Provas</h2>
                <h4 class="text-center">Preencha os campos corretamente:</h4>
                <form action="saida.php" method="get">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Valor total da prova 1:</label>
                            <input type="number" class="form-control" name="totalProva1" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Valor total da prova 2:</label>
                            <input type="number" class="form-control" name="totalProva2" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nota Prova 1:</label>
                            <input type="number" class="form-control" name="notaProva1" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nota prova 2:</label>
                            <input type="number" class="form-control" name="notaProva2" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary text-center">Calcular</button>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>