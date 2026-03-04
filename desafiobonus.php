<?php

$cadastro = [
    [
        "nome" => "João",
        "email" => "joao@email.com",
        "idade" => 20
    ],
    [
        "nome" => "Fernanda",
        "email" => "fernanda@email.com",
        "idade" => 22
    ]
];

// Exibir cadastro
foreach ($cadastro as $pessoa) {
    echo "Nome: " . $pessoa["nome"] . "<br>";
    echo "Email: " . $pessoa["email"] . "<br>";
    echo "Idade: " . $pessoa["idade"] . "<br>";
    echo "----------------------<br>";
}

?>