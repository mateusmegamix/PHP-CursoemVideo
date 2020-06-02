<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Operadores Relacionais</title>
</head>
<body>
<div>
    <?php
        /*$n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2<br/>";
        $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
        echo "O resultado será $r";

        $a = 3;
        $b = "3";
        $r = ($a == $b) ?  "SIM" : "NAO"; //se for identico precisa de 3 iguais
        echo "As variaveis A e B  sao iguais? $r";


        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2)/2;
        echo "A media entre $nota1 e $nota2 é igual a $m  <br/>";
        //$sit = ($m<6) ? "Reprovado" :  "Aprovado";
        echo "a situação do aluno é " . ($sit = ($m<6) ? "Reprovado" :  "Aprovado");
        */

        $ano = $_GET["an"];
        $idade = 2019 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos. ";
        $tipo = ($idade >= 18 && $idade < 65) ? "Obrigatório":"Não Obrigatório";
        echo "E dessa forma seu voto é $tipo";
    ?>
</div>
</body>
</html>