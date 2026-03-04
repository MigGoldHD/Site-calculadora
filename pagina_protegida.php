<?php

// Usuários cadastrados (exemplo simples)
$usuarios = [
    "admin" => ["senha" => "1234", "cargo" => "Administrador"],
    "joao"  => ["senha" => "abcd", "cargo" => "Funcionário"],
    "maria" => ["senha" => "5678", "cargo" => "Gerente"]
];

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

echo "<h2>Resultado do Login</h2>";

if (isset($usuarios[$usuario]) && $usuarios[$usuario]["senha"] === $senha) {
    
    $cargo = $usuarios[$usuario]["cargo"];
    echo "Bem-vindo, <strong>$usuario</strong>!<br>";
    echo "Seu cargo é: <strong>$cargo</strong>";

} else {
    echo "Erro: Nome de usuário ou senha incorretos.";
}

?>