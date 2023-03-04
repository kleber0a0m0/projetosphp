<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerador de Tabelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center mt-4">Gerador de Tabelas</h2>
            <h4 class="text-center">Preencha os campos corretamente:</h4>
            <form action="saida.php" method="post">
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label">Titulo:</label>
                        <input type="text" class="form-control" name="titulo" required>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Espaço ocupado na página (em %):</label>
                                <select name="espaco" class="form-control">
                                    <option value="20%">20%</option>
                                    <option value="40%">40%</option>
                                    <option value="60%">60%</option>
                                    <option value="80%">80%</option>
                                    <option value="100%">100%</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Tamanho da borda (0 a 9):</label>
                            <input type="number" class="form-control" name="borda" id="borda" required min="0" max="9">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Quantidade de linhas:</label>
                            <input type="number" class="form-control" name="linhas" required>
                        </div>
                        <div class="mb-3">

                            <label class="form-label" for="cor_texto">Cor do texto:</label>
                            <select id="cor_texto" name="cor_texto" class="form-control">
                                <option value="black">Preto</option>
                                <option value="red">Vermelho</option>
                                <option value="blue">Azul</option>
                                <option value="green">Verde</option>
                                <option value="yellow">Amarelo</option>
                            </select>
                            </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Quantidade de colunas:</label>
                            <input type="number" class="form-control" name="colunas" required>
                            </div>
                        <div class="mb-3">
                            <label class="form-label">Cor de fundo da tabela:</label>
                            <select id="cor_fundo" name="cor_fundo" class="form-control">
                                <option value="red">Vermelho</option>
                                <option value="blue">Azul</option>
                                <option value="green">Verde</option>
                                <option value="yellow">Amarelo</option>
                                <option value="black">Preto</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary text-center">Gerar tabela</button>
            </form>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>