<?php

// Criar vetor associativo com dados de um produto
$produto = [
    "nome" => "Notebook",
    "preco" => 3500.00,
    "estoque" => 15
];

// Imprimir os dados com foreach
foreach ($produto as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}

?>