<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maior número</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="h1 text-center mb-5">Maior número</h1>
       <div class="row">
           <div class="col-3"></div>
           <div class="col-3">
               <img src="https://cdn-icons-png.flaticon.com/512/30/30282.png" class="mx-auto text-center " width="250">
           </div>
           <div class="col-3">
               <form action="saida.php" method="get">
                   <div class="mb-3">
                       <label class="form-label">Número 1:</label>
                       <input type="text" name="num1" class="form-control">
                   </div>
                   <div class="mb-3">
                       <label class="form-label">Número 2:</label>
                       <input type="text" name="num2" class="form-control">
                   </div>
                   <div class="mb-3">
                       <label class="form-label">Número 3:</label>
                       <input type="text" name="num3" class="form-control">
                   </div>
                   <button type="submit" class="btn btn-primary">Enviar</button>
               </form>
           </div>
           <div class="col-3"></div>
       </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>