<?php

$alunos = [
    ["nome" => "Ana", "nota" => 8.5],
    ["nome" => "Carlos", "nota" => 7.0],
    ["nome" => "Mariana", "nota" => 9.2]
];

$soma = 0;
$maiorNota = 0;
$melhorAluno = "";

// Percorrer alunos
foreach ($alunos as $aluno) {
    $soma += $aluno["nota"];

    if ($aluno["nota"] > $maiorNota) {
        $maiorNota = $aluno["nota"];
        $melhorAluno = $aluno["nome"];
    }
}

// Calcular média
$media = $soma / count($alunos);

// Exibir resultados
echo "Média das notas: " . $media . "<br>";
echo "Maior nota: " . $maiorNota . "<br>";
echo "Melhor aluno: " . $melhorAluno . "<br>";

?>