<?php

// Criar vetor com 5 números
$numeros = [10, 20, 30, 40, 50];

// Remover o terceiro elemento (índice 2)
unset($numeros[2]);

// Imprimir todos os elementos restantes
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

?>