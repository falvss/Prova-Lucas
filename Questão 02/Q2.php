<?php
echo "========== CALCULADORA ========== " . PHP_EOL;
echo "Digite o primeiro número: ";
$PrimeiroNumero = (float) trim(readline());
echo "Digite o segundo número: ";
$SegundoNumero = (float) trim(readline());

echo PHP_EOL;
echo "========== MENU DE OPÇÕES =======" . PHP_EOL;
echo "1 - Adição (+)" . PHP_EOL;
echo "2 - Subtração (-)" . PHP_EOL;
echo "3 - Multiplicação (*)" . PHP_EOL;
echo "4 - Divisão (/)" . PHP_EOL;
echo "--------------------------------------------------" . PHP_EOL;
echo "Escolha a operação desejada (1-4): ";
$OpcaoDesejada = (int) trim(readline());
echo PHP_EOL;
echo "=============== RESULTADO =======================" . PHP_EOL;

switch ($OpcaoDesejada) {
    case 1:
        $Resultado = $PrimeiroNumero + $SegundoNumero;
        echo "Operação:          Adição (+)" . PHP_EOL;
        echo "Resultado:         " . $PrimeiroNumero . " + " . $SegundoNumero . " = " . $Resultado . PHP_EOL;
        break;
        
    case 2:
        $Resultado = $PrimeiroNumero - $SegundoNumero;
        echo "Operação:          Subtração (-)" . PHP_EOL;
        echo "Resultado:         " . $PrimeiroNumero . " - " . $SegundoNumero . " = " . $Resultado . PHP_EOL;
        break;
        
    case 3:
        $Resultado = $PrimeiroNumero * $SegundoNumero;
        echo "Operação:          Multiplicação (*)" . PHP_EOL;
        echo "Resultado:         " . $PrimeiroNumero . " * " . $SegundoNumero . " = " . $Resultado . PHP_EOL;
        break;
        
    case 4:
        if ($SegundoNumero == 0) {
            echo "Erro: Divisão por zero não é permitida! HAHAHAHAHAHA!" . PHP_EOL;
        } else {
            $Resultado = $PrimeiroNumero / $SegundoNumero;
            echo "Operação:          Divisão (/)" . PHP_EOL;
            echo "Resultado:         " . $PrimeiroNumero . " / " . $SegundoNumero . " = " . $Resultado . PHP_EOL;
        }
        break;
        
    default:
        echo "Opção inválida! Escolha um número entre 1 e 4." . PHP_EOL;
        break;
}
