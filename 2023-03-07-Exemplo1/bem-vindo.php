<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Saida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<section>
    <table>
        <tr>
            <td>
                <?php
                //$senha = 'minha_senha';
                
                $senha_user = '123';
                $hash_user = md5($senha_user);

                    $senha = $_POST["senha"];
                    $senha_criptografada = md5($senha);


                if ($hash_user == $senha_criptografada) {
                    $nome = $_POST["nome"];
                        echo "<h4>Bem vindo  ". $nome ."</h4>";
                        echo $senha_criptografada;
                        echo $senha;
                } else {
                    echo 'A senha é inválida!';
                    header('Location: index.php');
                    exit();
                }
                ?>
            </td>
        </tr>


    </table>
</section>
</body>
</html>