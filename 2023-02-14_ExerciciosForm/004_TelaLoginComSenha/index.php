<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
       <div class="row">
           <div class="col-3"></div>
           <div class="col-3">
               <img src="https://cdn-icons-png.flaticon.com/512/9605/9605964.png" class="mx-auto text-center " width="250">
           </div>
           <div class="col-3">
               <form action="bem-vindo.php" method="get">
                   <div class="mb-3">
                       <label class="form-label">Nome:</label>
                       <input type="text" name="nome" class="form-control">
                   </div>
                   <div class="mb-3">
                       <label for="exampleInputPassword1" class="form-label">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
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