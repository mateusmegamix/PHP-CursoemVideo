<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Exercício 2</title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
        $ano =  isset($_GET["ano"])?$_GET["ano"]:"[não informado]";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos!";
    ?>
    <a href="html2.html">Voltar</a>
</div>
</body>
</html>