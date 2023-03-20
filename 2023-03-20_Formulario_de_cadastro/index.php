<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div id="tformulario">
        <h1>Enviar Arquivo</h1>
        <form action="saida.php" method="POST" enctype="multipart/form-data">
            <label>Selecione um arquivo</label>
            <input type="file" name="arquivo">
            <br/>
            <input type="submit" value="Enviar" class="botao">
        </form>
    </div>
</body>
</html>