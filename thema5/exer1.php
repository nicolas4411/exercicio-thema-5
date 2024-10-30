<?php
$cadastro = array(
    array("toyota", "corolla", 2020, "prata"),
    array("honda", "civic", 2019, "preto"),
    array("ford", "focus", 2018, "azul")
);

// Função para exibir o array de carros de forma organizada
function exibirCarros($carros)
{
    foreach ($carros as $index => $carro) {
        echo "Carro " . ($index + 1) . ":<br>";
        echo "Marca: " . $carro[0] . "<br>";
        echo "Modelo: " . $carro[1] . "<br>";
        echo "Ano: " . $carro[2] . "<br>";
        echo "Cor: " . $carro[3] . "<br><br>";
    }
}
// Passo 2: Exibir o array original
echo "<strong>Array original:</strong><br>";
exibirCarros($cadastro); // Corrigido aqui

$cadastro [1][3]="branco";
exibirCarros($cadastro);
$cadastro [] = array ( "chevrolet", "cruize", 2021,"vermelho");
exibirCarros($cadastro);
array_shift($cadastro);

exibirCarros($cadastro);
?>