<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="geral">
        <section id="conteudo">
            <table>
                <tr>
                    <td>
                        <?php
                            $pasta = 'upload/';
                            $tmpName = $_FILES['arquivo']['tmp_name'];
                            $name = $_FILES['arquivo']['name'];

                            if(!empty($name)){
                                if(move_uploaded_file($tmpName, $pasta . $name)){
                                    echo 'arquivo enviado';
                                }else{
                                    echo 'Arquivo não foi enviado';
                                }
                            }else{
                                echo 'Selecione o arquivo a ser enviado';
                            }
                        ?>
                        <a href="index.php">Voltar</a>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>