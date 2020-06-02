<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso em Video de PHP</title>
</head>
<body>
<div>
    <?php
        /*exercício  de operações
        para estudo*/
        $preco = $_GET["p"];//coloca valor na URL
        $atual = $_GET["aa"];//coloca o valor na URL
        echo "O preco do  produto é R$ ".number_format($preco, 2, ",", ".");
        $preco += ($preco*10/100);
        echo "<br/>O novo preço com 10% de aumento será R$ ".number_format($preco, 2, ",", ".");

        #incremento
        echo "<br/>O ano atual é $atual e o ano anterior é " . --$atual;

        #atividade com &
        $a = 3;
        $b = &$a; //aqui o  valor de A permanece o mesmo
        $b += 5;
        echo "</br>A variavel A vale $a";
        echo "</br>A variavel B vale $b";

        #variáveis de variáveis
        $x = "abc";
        $$x = "def";
        echo "</br>O contúdo davariável X é $x";
        echo "</br>A variável criada recebeu o valor $abc";
    ?>
</div>
</body>
</html>