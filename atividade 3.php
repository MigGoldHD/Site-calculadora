<?php

// Classe base
class Funcionario {
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularBonus() {
        return $this->salario * 0.10;
    }

    public function exibirDados() {
        echo "Funcionário: {$this->nome} (" . get_class($this) . ")<br>";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
    }
}

// Classe Gerente
class Gerente extends Funcionario {
    public function calcularBonus() {
        return $this->salario * 0.20;
    }
}

// Classe Desenvolvedor
class Desenvolvedor extends Funcionario {
    public function calcularBonus() {
        return $this->salario * 0.15;
    }
}

// Array com vários funcionários
$funcionarios = [
    new Gerente("João", 10000),
    new Desenvolvedor("Maria", 8000),
    new Gerente("Carlos", 15000),
    new Desenvolvedor("Ana", 6000)
];

// Percorrendo o array
foreach ($funcionarios as $funcionario) {
    $funcionario->exibirDados();
    echo "Bônus: R$ " . number_format($funcionario->calcularBonus(), 2, ',', '.') . "<br><br>";
}

?>