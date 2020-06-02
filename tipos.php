<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Primeiro exemplo PHP</title>
</head>
<body>
<div>
    <?php
      $n = 4;
      $nome = "Mateus";
      $idade = 23;
      echo $nome."tem ".$idade." anos!";
      echo "$nome tem $idade anos!";
    ?>
</div>
</body>
</html>