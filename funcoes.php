<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Funcoes Aritmeticas em PHP</title>
    <style>
        h2 {
            font:  15pt Arial;
            color: #80a2ff;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluro de  $v2 é "  . abs($v2);
        echo "</br>O valor de $v1<sup>$v2</sup> é " . pow($v1, $v2);
        echo "</br>O valor de $v1  é " . sqrt($v1);
        echo "</br>O valor de $v2 é ". round($v2); //ceil or floor
        echo "</br>A parte inteira  de $v1 é " . intval($v1);
        echo "</br>O valor de $v1 em moeda é " . number_format($v1,2, ",", ".");
    ?>
</div>
</body>
</html>