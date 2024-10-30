<?php
// Criando um array indexado de carros
$carros = [
    ["marca" => "Toyota", "modelo" => "Corolla", "ano" => 2020, "cor" => "prata"],
    ["marca" => "Honda", "modelo" => "Civic", "ano" => 2019, "cor" => "preto"],
    ["marca" => "Ford", "modelo" => "Focus", "ano" => 2018, "cor" => "azul"],
];

// Função para exibir o array de carros de forma organizada
function exibirCarros($carros) {
    foreach ($carros as $index => $carro) {
        echo "Carro " . ($index + 1) . ":<br>";
        echo "Marca: " . $carro["marca"] . "<br>";
        echo "Modelo: " . $carro["modelo"] . "<br>";
        echo "Ano: " . $carro["ano"] . "<br>";
        echo "Cor: " . $carro["cor"] . "<br><br>";
    }
}

// Passo 2: Exibir o array original
echo "<strong>Array original:</strong><br>";
exibirCarros($carros);
echo "<br>";
$carros [1]["cor"] = "branco";
exibirCarros($carros);
$carros[] = ["marca" => "chevrolet", "modelo" => "cruze", "ano" => 2021, "cor" => "vermelho"];
exibirCarros($carros);
array_shift($carros);
exibirCarros($carros);
?>
