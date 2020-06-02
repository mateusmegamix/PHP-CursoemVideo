<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<div>
    <?php
        $v[0]=4;
        $v[1]=8;
        $v[2]=3;
        print_r($v);"</br>";
        $v2 = array(3,7,6,2,1,9);"</br>";
        print_r($v2);
        //var_dump($x);
        //var_export($x);
        "</br>";
        $p = "Leite";
        $pr = 4.5;
        echo "O $p custa R$".number_format($pr,2);"</br>";
        printf ("O %s custa R$ %f.2",$p,$pr);

        $t = "Este é um exemplo de string  gigante que...";
        $r = wordwrap($t, 20,"<br/>\n");
        echo ($r);
    ?>
</div>
</body>
</html>