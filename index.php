<?php


    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];

    if ($operacao == "+"){
        $resultado = $numero1 + $numero2;
    } elseif($operacao == "-"){
        $resultado = $numero1 - $numero2;
    } elseif($operacao == "*"){
        $resultado = $numero1 * $numero2;
    } elseif($operacao == "/"){
        $resultado = $numero1 / $numero2;
    } else {
        echo "Operação Inválida";
        $resultado = "0";
    }

    echo "<h1>Resultado: ($resultado)</h1>";
    echo "<a href= 'calculadora.html'>Voltar</a:>";

    ?>