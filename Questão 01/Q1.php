<?php

echo "========== Informe um numero para a tabuada ==========" . PHP_EOL;
$entrada = trim(readline());

if (ctype_digit($entrada)) {
    $numero = (int)$entrada;

    // A tabuada só roda se o número for válido
    echo "\nTabuada do $numero:\n";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo $numero . " x " . $i . " = " . $resultado . PHP_EOL;
    }

} else {
    echo "Erro: Entrada inválida. Por favor, digite apenas números inteiros e positivos.\n\n";
}
