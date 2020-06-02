<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title></title>
</head>
<body>
<div>
    <?PHP
        $n1 = 3;
        $n2 = 2;
        $s = $n1 +  $n2;
        $m = ($n1 + $n2) / 2;

        "http://localhost/aula05/operadores.php?a=3&b=2";
        $N1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "A soma entre $n1 + $n2 = $s.";
        echo "<br/>A subtração vale ". ($n1-$n2);
        echo "<br/>A multiplicação vale ". ($n1*$n2);
        echo "<br/>A divisão vale ". ($n1/$n2);
        echo "<br/>O modulo vale ". ($n1%$n2);
        echo "<br/>O media vale $m";
    ?>
</div>
</body>
</html>