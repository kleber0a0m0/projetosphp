<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<?php
    $nome = $_GET["nome"];
    if (empty($nome)){
        echo "Campo nome vazio";
    }else{
        echo "Campo nome com valor: ".$nome;
    }
?>
<body>
    <div class="container mt-5">
       <div class="row">
           <div class="col-3"></div>
           <div class="col-3">
               <img src="https://cdn-icons-png.flaticon.com/512/1864/1864509.png" class="mx-auto text-center " width="250">
           </div>
           <div class="col-3">
               <form action="index.php.php" method="get">
                   <div class="mb-3">
                       <label class="form-label">Nome:</label>
                       <input type="text" name="nome" class="form-control">
                   </div>
                   <div class="mb-3">
                       <label class="form-label">CPF:</label>
                       <input type="text" name="cpf" class="form-control">
                   </div>
                   <div class="mb-3">
                       <label class="form-label">Idade:</label>
                       <input type="number" name="idade" class="form-control">
                   </div>
                   <div class="mb-3">
                       <label class="form-label">E-mail:</label>
                       <input type="email" name="email" class="form-control">
                   </div>
                   <div class="d-grid">
                       <button type="submit" class="btn btn-primary">Cadastrar</button>
                       <button type="reset" class="btn btn-secondary">Limpar</button>
                   </div>
               </form>
           </div>
       </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>