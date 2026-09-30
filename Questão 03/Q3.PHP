<?php
$Identificação = rand(1, 99);
$data = date('d/m/Y');

echo "Identificação da Colheita: " . $Identificação . PHP_EOL;
echo "Data: " . $data . PHP_EOL;
echo PHP_EOL;
echo "Nome do Responsável pela Colheita: ";
$nomeResponsavel = trim(readline());
echo "========== Cadastro ==========" . PHP_EOL; 
echo "Quantas Culturas serão cadastradas?: ";
$NCulturas = (int) trim(readline());

$culturasValidas = [];

for ($i = 1; $i <= $NCulturas; $i++) {
    echo PHP_EOL . "--- Cadastro da Cultura #$i ---" . PHP_EOL;
    
    echo "Nome da Cultura: ";
    $CulturaNome = trim(readline());

    echo "Quantidade Produzida (KG): ";
    $QuantidadeProduzida = (float) trim(readline());

    echo "Valor por KG (Estimado de Venda): ";
    $ValorVenda = (float) trim(readline());

    if ($QuantidadeProduzida > 0 && $ValorVenda > 0) {
        
        $ValorProducao = $QuantidadeProduzida * $ValorVenda;

        $culturasValidas[] = [
            'nome' => $CulturaNome,
            'quantidade' => $QuantidadeProduzida,
            'valor_kg' => $ValorVenda,
            'valor_producao' => $ValorProducao
        ];

        echo "Cultura '$CulturaNome' cadastrada com sucesso!" . PHP_EOL;
    } else {
        echo "Dados inválidos! Quantidade e Valor por KG devem ser maiores que zero!!!" . PHP_EOL;
    }
}
$qtdCulturasValidas = count($culturasValidas);
$totalKgColheita = 0;
$valorEstimadoColheita = 0;

foreach ($culturasValidas as $cultura) {
    $totalKgColheita += $cultura['quantidade'];
    $valorEstimadoColheita += $cultura['valor_producao'];
}
echo PHP_EOL;
echo "=============== RESUMO GERAL =====================" . PHP_EOL;
echo "Código da Colheita: " . $Identificação . PHP_EOL;
echo "Data:               " . $data . PHP_EOL;
echo "Responsável:        " . $nomeResponsavel . PHP_EOL;
echo "--------------------------------------------------" . PHP_EOL;
echo "Culturas Válidas:   " . $qtdCulturasValidas . PHP_EOL;
echo "Total Produzido:    " . $totalKgColheita. " KG" . PHP_EOL;
echo "Valor Est. Total:   R$ " . $valorEstimadoColheita . PHP_EOL;
echo "============ DETALHAMENTO POR CULTURA ============" . PHP_EOL;
if ($qtdCulturasValidas === 0) {
    echo "Nenhuma cultura válida foi cadastrada." . PHP_EOL;
} else {
    foreach ($culturasValidas as $cultura) {
        echo "Cultura:            " . $cultura['nome'] . PHP_EOL;
        echo "Qtd Produzida:      " . $cultura['quantidade']. " KG" . PHP_EOL;
        echo "Valor por KG:       R$ " . $cultura['valor_kg']. PHP_EOL;
        echo "Valor da Produção:  R$ " . $cultura['valor_producao']. PHP_EOL;
        echo "--------------------------------------------------" . PHP_EOL;
    }
}
