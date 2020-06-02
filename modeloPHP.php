<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>HTML5 + PHP</title>
</head>
<body>
<div>
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "O valor de $valor é igual a ".number_format($rq,2);
    ?>
    <a  href="modeloHTML5.html">Voltar</a>
</div>
</body>
</html>