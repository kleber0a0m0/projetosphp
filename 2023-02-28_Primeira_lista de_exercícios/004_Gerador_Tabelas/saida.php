<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criador de retângulos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <h2 class="text-center mt-4">Tabela gerada:</h2>

<?php
//// Definir valores da tabela
//$titulo = "Exemplo de tabela";
//$espaco = "80%";
//$linhas = 5;
//$colunas = 3;
//$borda = 3;
//$cor_fundo = "#387A38";
//$cor_texto = "#FFFFFF";

$titulo = $_POST['titulo'];
$espaco = $_POST['espaco'];
$linhas = $_POST['linhas'];
$colunas = $_POST['colunas'];
$borda = $_POST['borda'];
$cor_fundo = $_POST['cor_fundo'];
$cor_texto = $_POST['cor_texto'];

// Gerar tabela HTML
$html = "<table width='$espaco' border='$borda' bgcolor='$cor_fundo'>";
$html .= "<caption style='text-align: center; padding: 10px; font-size: 20px;'>$titulo</caption>";
for ($i = 1; $i <= $linhas; $i++) {
  $html .= "<tr>";
  for ($j = 1; $j <= $colunas; $j++) {
    $html .= "<td align='center' style='color: $cor_texto; border: 1px solid black;'>Linha $i, Coluna $j</td>";
  }
  $html .= "</tr>";
}
$html .= "</table>";

// Gerar tag <code> com o código HTML da tabela
$code = "<code><style>
code {
  display: block;
  font-size: 14px;
  margin: 10px 0;
  padding: 10px;
  background-color: #FF8000;
  border-radius: 4px;
  overflow: auto;
  word-wrap: break-word;
  color: #FFFFFF;
}

code span {
  color: #FFFFFF
}

.hljs {
  color: #FFFFFF;
}


}
</style>" . highlight_string($html, true) . "</code>";

// Imprimir a tabela e o código HTML formatado
echo "<div style='font-size: 14px; padding: 10px;'>";
echo "<h2 style='margin-top: 0;'>Tabela: ".$titulo."</h2>" . $html . "</div>";
echo "<div style='background-color: #2D2D2D; color: #FFFFFF; font-size: 14px; padding: 10px;'>";
echo "<h2 style='margin-top: 0;'>Código HTML:</h2>" . $code;
echo "<button style='background-color: #333333; color: #FFFFFF; border: none; padding: 5px 10px; margin-top: 10px; cursor: pointer;' onclick='copiarCodigo()'>Copiar código</button></div>";
?>

                <!-- Script para copiar o código gerado -->
                <script>
                    function copiarCodigo() {
                        const codigo = document.querySelector("code");
                        const textarea = document.createElement("textarea");
                        textarea.value = codigo.innerText;
                        document.body.appendChild(textarea);
                        textarea.select();
                        document.execCommand("copy");
                        document.body.removeChild(textarea);
                        alert("Código copiado com sucesso!");
                    }
                </script>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
