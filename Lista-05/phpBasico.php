<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Básico</title>
</head>
<body>
    <?php
        echo "<h1>Olá, Mundo!</h1>";

        $nome = "Alessandro";
        $idade = 20;
        
        $mensagem = "<p>Meu nome é " . $nome ." e tenho " . $idade . " anos.</p>";
        echo $mensagem;

        $numero1 = 5;
        $numero2 = 7;
        $soma = $numero1 + $numero2;

        $resultado = "<p>A soma entre ". $numero1 ." e " . $numero2 . " é: " . $soma . "</p>";
        echo $resultado;

        if ($numero1 > 10){
            echo "<p>O número é maior que 10</p>";
        } else {
            echo "<p>O número é menor ou igual a 10</p>";
        }
        
    ?>
</body>
</html>